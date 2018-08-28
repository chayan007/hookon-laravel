<?php

namespace App\Http\Controllers\RecruiterAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Hesto\MultiAuth\Traits\LogsoutGuard;

use Laravel\Socialite\Facades\Socialite;
use App\Recruiter;

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
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function redirectToFB()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function redirectToLinkedIn()
    {
        return Socialite::driver('linkedin')->redirect();
    }
    /**
       * Obtain the user information from Google.
       *
       * @return \Illuminate\Http\Response
       */
      public function handleGoogleCallback()
      {

          $user = Socialite::driver('google')->stateless()->user();

          // check if they're an existing user
          $existingUser = Recruiter::where('email', $user->email)->first();

          if($existingUser){
              // log them in
              Auth::guard('recruiter')->login($existingUser, true);
          } else {
              // create a new user
              $newUser = new Recruiter;
              $newUser->name = $user->name;
              $newUser->email = $user->email;
              $newUser->password = "";
              $newUser->api_id = $user->id;
              $newUser->save();

              Auth::guard('recruiter')->login($newUser, true);
              //auth()->login($newUser, true);
          }
          return redirect()->to('/recruiter/profile');
      }
      /**
         * Obtain the user information from Facebook.
         *
         * @return \Illuminate\Http\Response
         */
        public function handleFBCallback()
        {

            $user = Socialite::driver('facebook')->user();

            // check if they're an existing user
            $existingUser = Recruiter::where('email', $user->email)->first();

            if($existingUser){
                // log them in
                Auth::guard('recruiter')->login($existingUser, true);
            } else {
                // create a new user
                $newUser = new Recruiter;
                $newUser->name = $user->name;
                $newUser->email = $user->email;
                $newUser->password = "";
                $newUser->api_id = $user->id;
                $newUser->save();

                Auth::guard('recruiter')->login($newUser, true);
                //auth()->login($newUser, true);
            }
            return redirect()->to('/recruiter/profile');
        }
        /**
           * Obtain the user information from LinkedIn.
           *
           * @return \Illuminate\Http\Response
           */
          public function handleLinkedInCallback()
          {

              $user = Socialite::driver('linkedin')->user();

              // check if they're an existing user
              $existingUser = Recruiter::where('email', $user->email)->first();

              if($existingUser){
                  // log them in
                  Auth::guard('recruiter')->login($existingUser, true);
              } else {
                  // create a new user
                  $newUser = new Recruiter;
                  $newUser->name = $user->name;
                  $newUser->email = $user->email;
                  $newUser->password = "";
                  $newUser->api_id = $user->id;
                  $newUser->save();

                  Auth::guard('recruiter')->login($newUser, true);
                  //auth()->login($newUser, true);
              }
              return redirect()->to('/recruiter/profile');
          }*/

    use AuthenticatesUsers, LogsoutGuard {
        LogsoutGuard::logout insteadof AuthenticatesUsers;
    }

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    public $redirectTo = '/recruiter/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('recruiter.guest', ['except' => 'logout']);
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('recruiter.auth.login');
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('recruiter');
    }
}
