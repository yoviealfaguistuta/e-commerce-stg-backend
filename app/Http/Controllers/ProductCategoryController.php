<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $data = ProductCategory::get();

        $response = [
            'data'    => $data,
            'message' => 'OK',
        ];

        return response()->json($response, 200);
    }
}
