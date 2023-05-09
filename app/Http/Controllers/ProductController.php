<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductType;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::get();

        $response = [
            'data'    => $data,
            'message' => 'OK',
        ];

        return response()->json($response, 200);
    }
}
