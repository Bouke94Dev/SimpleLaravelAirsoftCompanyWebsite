<?php

namespace App\Services;

use App\Dto\LoginDTO;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function login(LoginDTO $dto): bool
    {
        return Auth::attempt([
            'email' => $dto->email,
            'password' => $dto->password,
        ]);
    }

    public function logout(): void
    {
        Auth::logout();
    }

    public function loginWithoutAttempt(Authenticatable $user): void
    {
        Auth::login($user);
    }
}
