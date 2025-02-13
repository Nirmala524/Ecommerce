<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index(Request $request)
    {

        $customer_id = Session::get('customer_id');
        $input = [
            'user_id' => $customer_id,
            'product_id' => $request->product_id,
            'quantity' => $request->product_quantity
        ];
        if (Cart::create($input)) {
            return response()->json(['message' => 'success', 'status' => 200], 200);
        } else {
            return response()->json(['message' => 'something went wrong', 'status' => 400], 400);
        }
    }
}
