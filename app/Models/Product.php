<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'code',
        'name',
        'short_description',
        'long_description',
        'price',
        'sale_price',
        'quantity',
        'brand',
        'is_cod',
        'package_height',
        'package_length',
        'package_weight',
        'package_width',
        'warranty_description',
        'warranty_policy',
        'image_small',
        'image_thumb',
        'image_original',
        'created_at',
        'updated_at',
        'created_by',
    ];
}
