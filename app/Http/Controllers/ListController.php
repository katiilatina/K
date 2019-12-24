<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
        $users = new \App\User;
        $users1 = $users::all();
        $users2 = json_decode($users1, true);

        return view('list.index')->with(['users' => $users2]);
    } 

}
