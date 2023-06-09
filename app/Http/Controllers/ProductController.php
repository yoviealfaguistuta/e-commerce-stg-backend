<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductSpecification;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {

        $category_id = $request->query('category_id');

        if ($category_id != null) {
            $data = Product::select(
                'product.id',
                'product.name',
                'product.short_description',
                'product.price',
                'product.sale_price',
                'product.sale_end_time',
                'product.quantity',
                'product.brand',
                'product.is_cod',
                'product.thumbnail',
                'product.created_at',
                'product_category.id AS category_id',
                'product_category.name AS category_name',
                'product_type.id AS type_id',
                'product_type.name AS type_name',
            )
                ->join('product_category', 'product_category.id', '=', 'product.category_id')
                ->where('product_category.id', '=', $category_id)
                ->join('product_type', 'product_type.id', '=', 'product.type_id')
                ->paginate(20);
        } else {
            $data = Product::select(
                'product.id',
                'product.name',
                'product.short_description',
                'product.price',
                'product.sale_price',
                'product.sale_end_time',
                'product.quantity',
                'product.brand',
                'product.is_cod',
                'product.thumbnail',
                'product.created_at',
                'product_category.id AS category_id',
                'product_category.name AS category_name',
                'product_type.id AS type_id',
                'product_type.name AS type_name',
            )
                ->join('product_category', 'product_category.id', '=', 'product.category_id')
                ->join('product_type', 'product_type.id', '=', 'product.type_id')
                ->paginate(20);
        }

        return $this->customResponse($data, 'OK', 200);
    }

    public function detail($id)
    {
        if (Product::where('id', $id)->exists()) {
            $data = Product::where('id', $id) ->first();
            $data = Product::with('product_specification')->findOrFail($id);

            return $this->customResponse($data, 'OK', 200);           

        }
        return response()->json('Produk tidak ditemukan', 500);
    }

   

    
}
