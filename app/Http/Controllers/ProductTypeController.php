<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductType;

class ProductTypeController extends Controller
{
    public function index()
    {
        $data = ProductType::get();
        return $this->customResponse($data, 'OK', 200);
    }
}
