<?php

namespace App\Http\Controllers;

use App\Realty;
use App\Object;
use App\House;
use App\Property;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function GetAllRealty(Request $request)
    {
       $realties = Realty::get();
       $isRequestExist = count($request->all());


       if($isRequestExist) {
         $realties = $request->property ? $realties->where('property_id', $request->property) : $realties;
         $realties = $request->object ? $realties->where('object_id', $request->object) : $realties;
         $realties = $request->house ? $realties->where('house_id', $request->house) : $realties;
         $realties = $request->floor ? $realties->where('floor', $request->floor) : $realties;
         $realties = $request->numberOfRooms ? $realties->where('numberOfRooms', $request->numberOfRooms) : $realties;
         $realties = $request->price ? $realties->where('price', "<", $request->price) : $realties;
       }


       $objects = Object::all();
       $houses = House::all();
       $properties = Property::all();

       $numberOfFloors = [];
       for ($i=1; $i <= 18; $i++) {
         $numberOfFloors[] = $i;
       }

       return view('main', [
         'realties' => $realties,
         'objects' => $objects,
         'houses' => $houses,
         'properties' => $properties,
         'floors' => $numberOfFloors
       ]);
    }

    public function GetAllObjects()
    {

    }

}
