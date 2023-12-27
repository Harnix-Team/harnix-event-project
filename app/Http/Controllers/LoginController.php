<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use App\Models\Picture;
use DateTime;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    // Google login 
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


    // Google Callback
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        $this->_registerOrLoginUser($user);


        return redirect()->route('profil', compact('avatar'));

    }


    // Facebook login 
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    // Facebook Callback
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();

    }


    protected function _registerOrLoginUser($data)
    {
        $user = User::where('email', '=', $data->email)->first();

        // create user if it not exist
        if(!$user)
        {
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->phoneNumber ='+229 000 000 00';
            $user->address = 'Benin';
            $user->gender = 'Autre';
            $user->birth_year = date('Y-m-d');
            $user->status = 'Participant';
            $user->email_verified_at = date('Y-m-d');
            $user->password = 'Null';

            $user->save();

            // create a picture for user
            $picture = new Picture();
            $picture->name = $data->avatar; 
            $picture->user_id = $user->id; 
            $picture->save();

            // create link between user and picture
            $user->picture()->associate($picture);
            $user->save();

        }  

        Auth::login($user);
        $avatar = Picture::where('id', '=', $user->id )->first();


        

    }
}
