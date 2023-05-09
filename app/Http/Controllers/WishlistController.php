<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\ProductType;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Request;

class WishlistController extends Controller
{
    public function index()
    {
        $data = Wishlist::where('user_id', auth('sanctum')->user()->id)->get();
        return $this->customResponse($data, 'OK', 200);
    }

    public function create($product_id)
    {
        if (Wishlist::where('user_id', auth('sanctum')->user()->id)->exists()) {
            return $this->customResponse(false, 'Produk ini sudah ada di daftar Wishlist', 500);
        }

        $data = Wishlist::create([
            'user_id' => auth('sanctum')->user()->id,
            'product_id' => $product_id,
        ]);

        return $this->customResponse($data, 'OK', 200);
    }
}
