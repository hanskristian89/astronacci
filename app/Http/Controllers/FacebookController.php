<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->stateless()->user();
            $findUser = User::where('social_id', $user->getId())->first();
            if ($findUser) {
                Auth::login($findUser);
                return redirect()->intended('home');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'level' => 'A',
                    'email' => $user->email,
                    'password' => bcrypt('123456'),
                    'social_id' => $user->id,
                ]);

                Auth::login($newUser);
                return redirect()->intended('home');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
