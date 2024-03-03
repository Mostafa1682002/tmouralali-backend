<?php

namespace App\Http\Controllers\dashbord;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $orders = Order::get();
        return view('Dashboard.order', compact('orders'));
    }

    public function order($id)
    {
        $order = Order::findOrFail($id);
        return view('Dashboard.showOrder', compact('order'));
    }
}
