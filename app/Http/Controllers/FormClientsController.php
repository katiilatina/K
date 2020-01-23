<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormClientsController extends Controller
{
    public function client()
    {
        return view('forms.client');
    }
    public function form(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required',
            'phone' => 'required'
        ]);
        $client = new \App\Client;
        $client->full_name = $request->full_name;
        $client->phone = $request->phone;
        $client->save();

        $clients = new \App\Client;
        $clients1 = $clients::all();
        $clients2 = json_decode($clients1, true);

        return view('clients')->with(['clients' => $clients2]);
    }
}
