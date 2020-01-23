<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {
    public function welcome() {
        return view('welcome');
    } 
    public function brands() {
        $brands = new \App\Brand;
        $brands1 = $brands::all();
        $brands2 = json_decode($brands1, true);

        return view('brands')->with(['brands' => $brands2]);
    } 
    public function cars() {
        $cars = new \App\Car;
        $cars1 = $cars::all();
        foreach ($cars1 as $car) {
            $array[$car['id']] = array(
                'id' => $car['id'],
                'brand' => $car->brands['name'],
                'price' => $car['price']
            );
        }
        //$cars2 = json_decode($cars1, true);

        return view('cars')->with(['cars' => $array]);
    }
    public function clients() {
        $clients = new \App\Client;
        $clients1 = $clients::all();
        $clients2 = json_decode($clients1, true);

        return view('clients')->with(['clients' => $clients2]);
    } 
    public function workers() {
        $workers = new \App\Worker;
        $workers1 = $workers::all();
        $workers2 = json_decode($workers1, true);

        return view('workers')->with(['workers' => $workers2]);
    } 
    public function orders_cars() {
        $orders = new \App\Order;
        $orders1 = $orders::all();
        //$orders2 = json_decode($orders1, true);
        foreach ($orders1 as $order) {
            $array[$order['id_order_car']] = array(
                'id_order_car' => $order['id_order_car'],
                'id_client' => $order->clients['full_name'],
                'id_car' => $order->cars->brands['name'].' '.$order->cars['price'],
                'id_worker'=> $order->workers['full_name'],
                'status' => $order['status']
            );
        }
        return view('orders_cars')->with(['orders' => $array]);
    } 
    public function workers_orders(){
        $workers = new \App\Worker;
        $workers1 = $workers::all();
        foreach ($workers1 as $worker) {
            $array[$worker['id_worker']] = array(
                'id_worker' => $worker['id_worker'],
                'name' => $worker['full_name'],
                'cars' => $worker->cars
            );
        }

        return view('workers_orders')->with(['worcars' => $array]);
    }
}
