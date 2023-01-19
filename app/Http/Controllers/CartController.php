<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cart(){
        $carts = User::find(Auth::user()->id)->carts;
        return view('cart', compact('carts'));
    }

    public function add_to_cart(Request $request){
        Cart::create([
            'user_id' => $request->user_id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity
        ]);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function delete_cart(Request $request){
        $cart = Cart::find($request->cart_id);
        $cart->delete();

        return redirect()->back();
    }

    public function purchase(){
        $carts = User::find(Auth::user()->id)->carts;

        $transaction = new Transaction();
        $transaction->user_id = Auth::user()->id;
        $transaction->transaction_date = now();
        $transaction->save();

        foreach($carts as $cart){
            $transactionDetail = new TransactionDetail();
            $transactionDetail->transaction_id = $transaction->id;
            $transactionDetail->product_id = $cart->products->id;
            $transactionDetail->quantity = $cart->quantity;
            $transactionDetail->save();

            // To delete all products in cart
            $cart->delete();
        }


        return redirect()->route('history');
    }
}
