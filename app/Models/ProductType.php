<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class ProductType extends Model
{
    use HasFactory;
    protected $table = 'product_type';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'code',
        'name',
        'description',
        'tag',
        'image',
        'created_at',
        'updated_at',
        'created_by',
    ];

    protected $casts = [
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
    ];
}
