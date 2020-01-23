<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormOrdersController extends Controller
{
    public function order()
    {
        $clients = \App\Client::all();
        $clients1 = json_decode($clients, true);
        $workers = \App\Worker::all();
        $workers1 = json_decode($workers, true);
        $cars = \App\Car::all();
        foreach ($cars as $car) {
            $array[$car['id']] = array(
                'id' => $car['id'],
                'brand' => $car->brands['name'],
                'price' => $car['price']
            );
        }
        return view('forms.order')->with(['clients' => $clients1, 'workers' => $workers1, 'cars' => $array]);
    }
    public function form(Request $request)
    {
        $validatedData = $request->validate([
            'id_client' => 'required',
            'id_car' => 'required',
            'id_worker' => 'required',
            'status' => 'required'
        ]);
        $order = new \App\Order;
        $order->id_client = $request->id_client;
        $order->id_car = $request->id_car;
        $order->id_worker = $request->id_worker;
        $order->status = $request->status;
        $order->save();

        $orders = new \App\Order;
        $orders1 = $orders::all();
        foreach ($orders1 as $order) {
            $array[$order['id_order_car']] = array(
                'id_order_car' => $order['id_order_car'],
                'id_client' => $order->clients['full_name'],
                'id_car' => $order->cars->brands['name'].' '.$order->cars['price'],
                'id_worker'=> $order->workers['full_name'],
                'status' => $order['status']
            );
        }
        //$orders2 = json_decode($orders1, true);

        return view('orders_cars')->with(['orders' => $array]);
    }
}
