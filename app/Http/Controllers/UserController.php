<?php

namespace App\Http\Controllers;

use App\Dto\UserUpdateDTO;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::with(['reservations.site', 'reservations.gear'])->findOrFail($id);
        $this->authorize('view', $user);

        return view('profile.show', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'postcode' => 'required|string|max:10',
            'city' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
        ]);

        $user = User::findOrFail($id);

        $userDto = new UserUpdateDTO($validate['first_name'], $validate['last_name'], $validate['postcode'], $validate['city'], $validate['phone']);

        $user->update($userDto->toArray());

        return redirect()->back()->with('success', 'profile has been updated succesfully');
    }
}
