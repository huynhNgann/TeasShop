<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Auth\PasswordHash:authorize();
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;
use Illuminate\Support\Facades\Redirect;

class PasswordController extends Controller
{
    /**
     * Display the password update form.
     */
   public function edit(Request $request): View
    {
        return view('backend.user.update-pass', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        // Validate input
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        // Update user's password
        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        // Redirect with a success message
        return redirect()->route('password.edit')->with('status', 'password-updated');
    }
}
