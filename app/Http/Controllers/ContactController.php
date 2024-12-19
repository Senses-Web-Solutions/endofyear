<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;
use App\Notifications\ContactMessageThanks;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ContactMessageReceived;

class ContactController extends Controller
{


    /**
     * Delete the user's account.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'message' => ['required', 'string', 'max:255'],
        ]);


        User::find(1)->notify(new ContactMessageReceived($request->email, $request->name, $request->message));

        Notification::route('mail', $request->email)
        ->notify(new ContactMessageThanks($request->name));

        return Redirect::to('/contact');
    }
}
