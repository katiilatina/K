<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormBrandsController extends Controller
{
    public function brand()
    {
        return view('forms.brand');
    }
    public function form(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'country' => 'required'
        ]);
        $brand = new \App\Brand;
        $brand->name = $request->name;
        $brand->country = $request->country;
        $brand->save();

        $brands = new \App\Brand;
        $brands1 = $brands::all();
        $brands2 = json_decode($brands1, true);

        return view('brands')->with(['brands' => $brands2]);
    }
}
