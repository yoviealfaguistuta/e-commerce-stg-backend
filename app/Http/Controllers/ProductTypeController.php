<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductType;

class ProductTypeController extends Controller
{
    public function index()
    {
        $data = ProductType::get();

        $response = [
            'data'    => $data,
            'message' => 'OK',
        ];

        return response()->json($response, 200);
    }
}
