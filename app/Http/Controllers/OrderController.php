<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        return view('checkout.index');
    }

    public function trackOrder(){
        return view('orders.track');
    }
}
