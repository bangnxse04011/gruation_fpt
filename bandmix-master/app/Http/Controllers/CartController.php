<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Cart;

class CartController extends Controller
{
    public function add(){
        Cart::add('');
    }

    public function index(){

        return view('cart.show');
    }
}
