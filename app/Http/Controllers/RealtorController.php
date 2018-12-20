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
use App\Service;
use Gate;
use Auth;

class RealtorController extends Controller
{
    public function GetClients()
    {
        if (Gate::denies('realtor')) {
          return view('errors.403');
        }

        $clients = Client::all();

        // $user = Auth::user();
        // $realtor = $user->realtor;
        // $deals = $realtor->deals;
        // $clients = [];
        //
        // foreach ($deals as $deal) {
        //   $client = $deal->realty->client;
        //   $clients[] = $client;
        // }

        return view('realtorClients', [
          'clients' => $clients
        ]);
    }

    public function GetDeals()
    {
        if (Gate::denies('realtor')) {
          return view('errors.403');
        }

        $user = Auth::user();
        $realtor = $user->realtor;
        $deals = $realtor->deals;

        return view('realtorDeals', [
          'deals' => $deals
        ]);
    }

    public function GetAddFormInfo()
    {
        if (Gate::denies('realtor')) {
          return view('errors.403');
        }

        $services = Service::all();
        $realties = Realty::all();

        return view('realtorAddForm', [
          'services' => $services,
          'realties' => $realties
        ]);
    }

    public function AddDeal(Request $request)
    {
        if (Gate::denies('realtor')) {
          return view('errors.403');
        }
        if(!!$request) {
          $user = Auth::user();
          $realtor = $user->realtor;
          $realtor->deals()->create($request->all());
        }

        return $this->GetDeals();
    }

    public function GetMenu()
    {
      if (Gate::denies('realtor')) {
        return view('errors.403');
      }

      return view('realtorMenu');
    }
}
