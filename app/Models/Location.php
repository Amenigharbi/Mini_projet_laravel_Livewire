<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    //quel est l'employé a enregistré pour une location
    public function user()
    {
        return $this->belongsTo(User::class,"user_id","id");

    }
    //effectue par quel client
    public function client()
    {
        return $this->belongsTo(Client::class,"client_id","id");

    }

    //quel est le statut de cette location
    public function statut()
    {
        return $this->belongsTo(status::class,"statut_location_id","id");

    }
    //quelles sont les differents paiements
    public function paiement()
    {
        return $this->hasMany(paiement::class);
    }
    //relation plusieurs à plusieurs
    //quels sont les articles loués pour cette location
    public function articles()
    {
        return $this->belongsToMany(Article::class,"article_location","location_id","article_id");
    }
}
