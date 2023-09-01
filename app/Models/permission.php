<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
    use HasFactory;
    //many to many
    //pour une certaine permission on peut connaitre tous les utilisateurs qui'ils utilisent 
    public function users()
    {
        return $this->belongsToMany(User::class,"user_permission","permission_id","user_id");

    }
}
