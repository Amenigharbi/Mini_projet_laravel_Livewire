<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paiement extends Model
{
    use HasFactory;
    //les utilisateurs qui enregistrent les paiements
    public function user()
    {
        return $this->belongsTo(User::class,"user_id","id");
    }

    //effectué par quelle location
    public function location()
    {
        return $this->belongsTo(Location::class,"location_id","id");
    }
}
