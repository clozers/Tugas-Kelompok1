<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Asset extends Model
{
    use hasFactory;

    public function users() {
        return $this->belongsToMany(User::class, 'users_assets');
    }
}
