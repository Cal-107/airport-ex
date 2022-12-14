<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;
    
    protected $fillable = ['firstname', 'lastname', 'birthdate', 'flight_id', 'code'];

    public function flight() {
        return $this->belongsTo(Flight::class);
    }
}
