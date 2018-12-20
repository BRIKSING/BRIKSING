<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        if($data['page']) {
          $role = 0;
          switch ($data['page']) {
            case 'boss':
              $role = 3;
              break;

            case 'realtor':
              $role = 2;
              break;
          }
        }

        $user = User::create([
            'name' => $data['name'] . " " . $data['lastName'],
            'email' => $data['email'],
            'Role_id' => $role,
            // 'isClient' => $data['checkbox_is_client'] == 'on' ? true : false,
            'password' => bcrypt($data['password']),
        ]);

        if($role == 2) {

          $this->redirectTo = '/clientMenu';

          $user->client()->create([
            'firstName' => $data['name'],
            'lastName' => $data['lastName'],
            'patronomyc' => $data['patronomyc'],
            'dateOfBirth' => $data['dateOfBirth'],
            'telephone' => $data['telephone'],
            'address' => $data['address']
          ]);
        }
        else if($role == 3) {

          $this->redirectTo = '/realtorMenu';

          $user->realtor()->create([
            'firstName' => $data['name'],
            'lastName' => $data['lastName'],
            'patronomyc' => $data['patronomyc'],
            'dateOfBirth' => $data['dateOfBirth'],
            'telephone' => $data['telephone'],
          ]);
        }

        return $user;
    }
}
