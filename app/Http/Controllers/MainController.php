<?php

namespace App\Http\Controllers;

use App\Realty;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function GetAllRealty()
    {
       $realties = Realty::all();

       return view('main', [
         'realties' => $realties
       ]);
    }

}
