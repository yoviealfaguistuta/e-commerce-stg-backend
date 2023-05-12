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
        'thumbnail',
        'created_at',
        'updated_at',
        'created_by',
    ];

    protected $casts = [
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
        'sale_end_time' => 'timestamp'
    ];

    public function product_specification(){
        return $this->hasMany(ProductSpecification::class);
    }
}
