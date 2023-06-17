<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Listing extends Model
{
    use HasFactory;

    public static function getItems() {
        return DB::table('listings')
            ->join('places', 'listings.user_id', '=', 'places.user_id')
            ->select('listings.*', 'places.confirmed')
            ->get()
            ->where('confirmed', 1);
    }
}
