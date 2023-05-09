<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class ProductCategory extends Model
{
    use HasFactory;
    protected $table = 'product_category';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'code',
        'name',
        'description',
        'tag',
        'image_small',
        'image_thumb',
        'image_original',
        'created_at',
        'updated_at',
        'created_by',
    ];
}
