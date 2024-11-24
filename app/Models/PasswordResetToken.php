<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordResetToken extends Model
{
    use HasFactory;

    protected $table = 'password_reset_tokens';
    protected $primaryKey = 'email'; // Set kolom 'email' sebagai primary key
    public $incrementing = false; // Karena 'email' bukan tipe integer
    protected $keyType = 'string'; // Karena 'email' bertipe string
    public $timestamps = false;

    protected $fillable = [
        'email',
        'token',
        'create_at',
    ];
}
