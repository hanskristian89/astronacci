<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use PhpParser\Node\Stmt\TryCatch;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();
            $findUser = User::where('social_id', $user->getId())->first();
            //dd("Hello");
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
            //dd($th->getMessage());
        }
    }
}
