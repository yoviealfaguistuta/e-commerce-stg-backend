<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Wishlist extends Model
{
    use HasFactory;
    protected $table = 'wishlist';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'user_id',
        'product_id',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
    ];
}
