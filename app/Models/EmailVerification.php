<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class EmailVerification extends Model
{
    use HasFactory;
    protected $table = 'email_verification';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'user_id',
        'verification_code',
        'expired',
        'is_valid',
        'validation',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
    ];
}
