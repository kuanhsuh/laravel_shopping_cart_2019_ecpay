<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Orders::all();
        return view('orders', compact('orders'));
    }
    public function new()
    {
        $oldCart = session()->has('cart') ? session()->get('cart') : null;
        $cart = new Cart($oldCart);
        return view('order',[
            'books'=> $cart->items,
            'totalPrice'=> $cart->totalPrice,
            'totalQty'=>$cart->totalQty]);
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $cart = session()->get('cart');
        $order = Orders::create([
            'name' => request('name'),
            'email' => request('email'),
            'cart' => serialize($cart)
            ]);
        session()->flash('success', 'Order success!');
        session()->forget('cart');
        return redirect('/');
    }

    public function confirm(Orders $order) {
        return view('confirm', compact('order'));
    }

}
