<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('forms.index');
    }
    public function inde(Request $request)
    {
        $validatedData = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email'
        ]);
        $user = new \App\User;
        $user->firstname = $request->firstName;
        $user->lastname = $request->lastName;
        $user->email = $request->email;
        $user->save();

        $request->session()->flash('message', 'Спасибо за регистрацию!');

        return view('welcome');
    }
    public function ind()
    {
        return view('welcome');
    }
}
