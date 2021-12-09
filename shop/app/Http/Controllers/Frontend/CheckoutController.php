<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
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
        public function placeorder( Request $request)
        {
            $order = new Order();
            $order->user_id = Auth::id();
            $order->fname = $request -> input('fname');
            $order->lname = $request-> input('lname');
            $order->email = $request -> input('email');
            $order->phone = $request-> input('phone');            
            $order->address1 = $request -> input('address1');
            $order->address2 = $request -> input('address2');
            $order->town = $request -> input('town');
            $order->county = $request -> input('county');
            $order->tracking_no = 'mega'.rand(1111, 99999);
            $order->save();

            $order->id;

            $cartItems = Cart::where('user_id', Auth::id())->get();
            foreach($cartItems as $item){
                OrderItem::create([
                    'order_id'=> $order->id,
                    'prod_id'=> $item->prod_id,
                    'qty'=> $item->prod_qty,
                    'price'=> $item->products->selling_price,
                ]);
            }

            if(Auth::user()->address1 == null)
            {
                $user = User::where('id', Auth::id())->first();
                $user->name = $request-> input('fname');
                $user->lname = $request-> input('lname');
                $user->phone = $request -> input('phone');
                $user->address1 = $request -> input('address1');
                $user->address2 = $request -> input('address2');
                $user->town = $request -> input('town');
                $user->county = $request -> input('county');

                $user->update();
 
            }

            $cartItems = Cart::where('user_id', Auth::id())->get();
            Cart::destroy($cartItems);

            return redirect('/')->with('status', 'Order Placed Successfully');
        }
}
