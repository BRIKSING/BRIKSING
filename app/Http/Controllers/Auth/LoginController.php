<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function redirectTo()
    {
        $user = Auth::user();
        $redirect = '';

        switch ($user->Role_id) {
          case 1:
            $redirect = '/bossMenu';
            break;
          case 2:
            $redirect = '/clientMenu';
            break;
          case 3:
            $redirect = '/realtorMenu';
            break;

          default:
            $redirect = '/mainpage';
            break;
        }
        return $redirect;
    }
}
