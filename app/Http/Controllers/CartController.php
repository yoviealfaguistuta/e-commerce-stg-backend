<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\ProductType;
use Illuminate\Support\Facades\Request;

class CartController extends Controller
{
    public function index()
    {
        $data = Cart::where('user_id', auth('sanctum')->user()->id)->get();
        return $this->customResponse($data, 'OK', 200);
    }

    public function create($product_id)
    {
        if (Cart::where('user_id', auth('sanctum')->user()->id)->exists()) {
            return $this->customResponse(false, 'Produk ini sudah ada di keranjang', 500);
        }

        $data = Cart::create([
            'user_id' => auth('sanctum')->user()->id,
            'product_id' => $product_id,
        ]);

        return $this->customResponse($data, 'OK', 200);
    }
}
