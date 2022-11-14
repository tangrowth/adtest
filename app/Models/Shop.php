<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo('App/Models/Category');
    }
    public function area(){
        return $this->belongsTo('App/Models/Area');
    }
    public function favorites(){
        return $this->belongsTo('App/Models/Favorite');
    }
    public function reservations(){
        return $this->belongsTo('App/Models/Reservation');
    }
}
