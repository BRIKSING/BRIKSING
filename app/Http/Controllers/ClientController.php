<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Client;
use App\Deal;
use App\Realtor;
use App\Realty;
use App\Property;
use App\Object;
use App\House;
use Gate;
use Auth;

class ClientController extends Controller
{
    public function GetRealties()
    {
        if (Gate::denies('client')) {
          return view('errors.403');
        }

        $user = Auth::user();
        $client = Client::where('user_id', $user->id)->first();
        $realties = Realty::where('client_id', $client->id)->get();

        return view('clientRealties', [
          'realties' => $realties
        ]);
    }

    public function GetProfile()
    {
        if (Gate::denies('client')) {
          return view('errors.403');
        }

        $user = Auth::user();
        $client = Client::where('user_id', $user->id)->get();

        if(!!$client) {
          $client = $client[0];
        }
        $options = [
          'E-mail' => $user->email,
          'Фамилия' => $client->lastName,
          'Имя' => $client->firstName,
          'Отчество' => $client->patronomyc,
          'Дата рождения' => $client->dateOfBirth,
          'Адрес' => $client->address,
          'Телефон' => $client->telephone,
        ];

        return view('clientProfile', [
          'options' => $options,
        ]);
    }

    public function GetDeals()
    {
        if (Gate::denies('client')) {
          return view('errors.403');
        }

        $deals = [];
        $user = Auth::user();
        $client = Client::where('user_id', $user->id)->first();
        if($client) {
          $realties = Realty::where('client_id', $client->id)->get();
          foreach ($realties as $realty) {
              $ds = $realty->deals()->get();
              $deals = $ds->merge($deals);
          }
        }

        // dd($deals);

        return view('clientDeals', [
          'deals' => $deals
        ]);
    }

    public function GetAddFormInfo()
    {
        if (Gate::denies('client')) {
          return view('errors.403');
        }

        $properties = Property::all();
        $objects = Object::all();
        $houses = House::all();

        return view('clientAddForm', [
          'objects' => $objects,
          'houses' => $houses,
          'properties' => $properties
        ]);
    }

    public function AddRealty(Request $request)
    {
        if (Gate::denies('client')) {
          return view('errors.403');
        }
        if(!!$request) {
          $user = Auth::user();
          $client = Client::where('user_id', $user->id)->first();
          $client->realty()->create($request->all());
        }

        return $this->GetRealties();
    }

    public function GetMenu()
    {
        if (Gate::denies('client')) {
          return view('errors.403');
        }

        return view('clientMenu');
    }
}
