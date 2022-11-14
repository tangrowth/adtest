<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'time',
        'number',
    ];
    public function shop(){
        return $this->belongsTo('App/Models/Shop');
    }
    public function user(){
        return $this->belongsTo('App/Models/User');
    }
}
