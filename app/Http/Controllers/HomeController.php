<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('welcome');
    }

    public function profile()
    {
      $user = Auth::user();
      $client = Client::where('user_id', $user->id)->get()[0];
      $options = [
        'E-mail' => $user->email,
        'Фамилия' => $client->lastName,
        'Имя' => $client->firstName,
        'Отчество' => $client->patronomyc,
        'Дата рождения' => $client->dateOfBirth,
        'Адрес' => $client->address,
        'Телефон' => $client->telephone,
      ];

      return view('home', [
        'options' => $options,
      ]);
    }
}
