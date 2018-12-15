<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
      $clientOptions = $request->all();
      $user = User::where('token', $userHeader)->first();
      // return ['what' => $userHeader];
      if(!$user) {
        return ['error' => 'There is no that user!'];
      }

      $user_id = $user->id;
      $taskOptions['user_id'] = $user_id;

      $task = Doing::create($clientOptions);
      return $task;
    }

    public function create(Request $request)
    {
      $request->clients()->
    }
}
