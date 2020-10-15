<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\Services\UserService;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserService $userService)
    {
        $this->middleware('guest')->except('logout');
        $this->userService = $userService;
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleGoogleProviderCallback()
    {
        $user = Socialite::driver('google')->user();
        $dbUser = \App\User::where('email',$user->email)->first();
        if($dbUser) {
            $dbUser->google_token = $user->token;
            $dbUser->save();
            auth()->login($dbUser);
        }
        else {
            $data = [
                "name"=>$user->getName(),
                "email"=>$user->getEmail(),
                "password"=>""
            ];
            $dbUser = $this->userService->createAccount($data);
            $dbUser->google_token = $user->token;
            $dbUser->save();
            auth()->login($dbUser);
        }

        return redirect()->route('home');
        // $user->token;
    }

}
