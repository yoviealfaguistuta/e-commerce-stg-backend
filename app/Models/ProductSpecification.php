<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSpecification extends Model
{
    use HasFactory;
    protected $table = 'product_specification';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'product_id',
        'name',
        'value',
    ];

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
}

