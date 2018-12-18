<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Client;
use App\Deal;
use App\Realtor;

class BossController extends Controller
{



    public function GetEmployees()
    {
        $realtors = Realtor::all();
        $employees = [];

        foreach ($realtors as $realtor) {
          $isHaveUser = $realtor->user->where('id', 3)->first();

          if($isHaveUser != null) {
            $employees[] = $realtor;
          }
        }

        return view('bossEmployees', [
          'employees' => $employees
        ]);
    }

    public function GetDeals(Request $request)
    {
        $deals = Deal::all();
        $client = Client::all();


        $isRequestExist = count($request->all());
        // dd($deals[0]->realtor->firstName);
        if($isRequestExist && !!$request->startDateOfDeal) {
          $deals = $deals->where('dateOfDeal', ">", $request->startDateOfDeal)
                         ->where('dateOfDeal', "<", $request->endDateOfDeal)
                         ->get();
        }

        return view('bossDeals', [
          'deals' => $deals
        ]);
    }

    public function GetRating(Request $request)
    {
      $realtors = Realtor::all();
      $employees = [];


      foreach ($realtors as $realtor) {
        $isHaveUser = $realtor->user->where('id', 3)->first();

        if($isHaveUser != null) {
          $employees[] = $realtor;
          $countsDeals[$realtor->id] = $realtor->deals()->get()->count();
          $deals = $realtor->deals;
          $totalPrice = 0;

          foreach ($deals as $deal) {
            $price = $deal->realty->price;
            $totalPrice += $price;
          }
          $costDeals[$realtor->id] = $totalPrice;

          $totalPrice = 0;
        }
      }

      return view('bossRate', [
        'employees' => $employees,
        'countDeals' => $countsDeals,
        'costDeals' => $costDeals
      ]);
    }

    public function GetMenu()
    {
      return view('bossMenu');
    }
}
