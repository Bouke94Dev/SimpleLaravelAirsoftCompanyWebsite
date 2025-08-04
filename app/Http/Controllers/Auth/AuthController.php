<?php

namespace App\Http\Controllers\Auth;

use App\Dto\LoginDTO;
use App\Dto\RegisterDTO;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct(public AuthService $authService) {}

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validate = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $loginDto = new LoginDTO($validate['email'], $validate['password']);

        if ($this->authService->login($loginDto)) {
            $request->session()->regenerate();

            return redirect()->intended(route('homepage'));
        }

        return back()->withErrors([
            'error' => 'Unable to login. The credentials are not valid',
        ]);
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {

        $validated = $request->validate([
            'first_name' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $registerDto = new RegisterDTO($validated['first_name'], $validated['email'], $validated['password']);

        $user = User::create([
            'first_name' => $registerDto->firstName,
            'email' => $registerDto->email,
            'password' => Hash::make($registerDto->password),
        ]);

        $this->authService->loginWithoutAttempt($user);

        $request->session()->regenerate();

        return redirect(route('homepage'))->with('success', 'Your account was created succesfully!');
    }

    public function logout(Request $request)
    {
        $this->authService->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
