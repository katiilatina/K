<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormWorkersController extends Controller
{
    public function worker()
    {
        return view('forms.worker');
    }
    public function form(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required',
            'state' => 'required'
        ]);
        $worker = new \App\Worker;
        $worker->full_name = $request->full_name;
        $worker->state = $request->state;
        $worker->save();

        $workers = new \App\Worker;
        $workers1 = $workers::all();
        $workers2 = json_decode($workers1, true);

        return view('workers')->with(['workers' => $workers2]);
    }
}
