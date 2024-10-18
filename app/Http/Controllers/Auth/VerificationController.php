<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Notifications\AccountVerifiedNotification;
use RealRashid\SweetAlert\Facades\Alert;

class VerificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function verify(Request $request)
    {
        $user = User::find($request->route('id'));
        if (! $user) {
            return redirect('/')->withErrors(['message' => 'Utilisateur introuvable']);
        }
        if ($user->hasVerifiedEmail())
        {
            Alert::error('Erreur', 'Votre email est déjà vérifié');
            return redirect('/')->with('message', 'Votre email est déjà vérifié.');
        }

        // Marquer l'email comme vérifié et envoyer l'événement
        if ($user->markEmailAsVerified())
        {
            $user->email_verified_at = now();
            $user->confirmated_at = 1;
            $user->save();
            $user->notify(new AccountVerifiedNotification());
        }

        Alert::success('success', 'Votre email a été confirmé avec sucess');
        return redirect('/')->with('message', 'Votre compte a été confirmé avec succès.');
    }


}
