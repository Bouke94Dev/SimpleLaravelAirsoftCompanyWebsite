<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Dto\UserUpdateDTO;
use Illuminate\Http\Request;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::with(['reservations.site', 'reservations.gear'])->findOrFail($id);
        $this->authorize('view', $user);

        return view('profile.show', compact('user'));
    }

    public function update(UserUpdateRequest $request, string $id)
    {

        $validated = $request->validated();

        $user = User::findOrFail($id);

        $userDto = new UserUpdateDTO($validated['first_name'], $validated['last_name'], $validated['postcode'], $validated['city'], $validated['phone']);

        $user->update($userDto->toArray());

        return redirect()->back()->with('success', 'Profile has been updated succesfully');
    }
}
