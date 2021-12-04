<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
        public function index()
        {
            $old_cartItems = Cart::where('user_id', Auth::id())->get();
            foreach($old_cartItems as $item)
            {
                if (!Product::where('id', $item-> prod_id)-> where('qty', '>=', $item -> prod_qty)-> exists())
                {
                    $removeItem = Cart::where('user_id', Auth::id())-> where('prod_id', $item-> prod_id)->first();
                    $removeItem-> delete();
                }
            }
            $cartItems = Cart::where('user_id', Auth::id())->get();


            return view('frontend.checkout', compact('cartItems')); 
        }
}
