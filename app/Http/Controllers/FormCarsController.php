<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormCarsController extends Controller
{
    public function car()
    {
        $brands = \App\Brand::all();
        $brands1 = json_decode($brands, true);
        return view('forms.car')->with(['brands' => $brands1]);
    }
    public function form(Request $request)
    {
        $validatedData = $request->validate([
            'id_brand' => 'required',
            'price' => 'required'
        ]);
        $car = new \App\Car;
        $car->id_brand = $request->id_brand;
        $car->price = $request->price;
        $car->save();

        $cars = new \App\Car;
        $cars1 = $cars::all();
        //$cars2 = json_decode($cars1, true);
        foreach ($cars1 as $car) {
            $array[$car['id']] = array(
                'id' => $car['id'],
                'brand' => $car->brands['name'],
                'price' => $car['price']
            );
        }
        return view('cars')->with(['cars' => $array]);
    }
}
