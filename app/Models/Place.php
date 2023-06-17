<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    public static function getUsersPlace() {
        return self::get()
            ->where('user_id', auth()->id())
            ->first();
    }
}
