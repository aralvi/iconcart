<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use Auth;
use Exception;
use App\User;

class SocialController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     
      ///////social login google////////
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }
     ///////social login callback google////////
     public function handelGoogleCallback(){
        // $user = Socialite::driver('google')->user();
        // $this->socialLoginOrRegister($user);
        // return redirect()->Route('home1')->with('success', 'successfully login or register.');
        
        
         try {
    
            $user = Socialite::driver('google')->user();
     
            $finduser = User::where('social_id', $user->id)->first();
     
            if($finduser){
     
                Auth::login($finduser);
    
                return redirect('/home');
     
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id'=> $user->id,
                    'password' => encrypt('123456')
                ]);
    
                Auth::login($newUser);
     
                return redirect('/vendor');
            }
    
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
     
     
    public function redirectToDriver($driver)
    {
        return Socialite::driver($driver)->redirect();
    }
      
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleDriverCallback($driver)
    {
        try {
    
            $user = Socialite::driver($driver)->user();
     
            $finduser = User::where('social_id', $user->id)->first();
     
            if($finduser){
     
                Auth::login($finduser);
    
                return redirect('/home');
     
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id'=> $user->id,
                    'password' => encrypt('123456')
                ]);
    
                Auth::login($newUser);
     
                return redirect('/vendor');
            }
    
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
