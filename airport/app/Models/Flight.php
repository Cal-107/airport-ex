<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = ['flight_code', 'date', 'take_off', 'landing'];

    public function passengers()
    {
        return $this->hasMany(Passenger::class);
    }
}
