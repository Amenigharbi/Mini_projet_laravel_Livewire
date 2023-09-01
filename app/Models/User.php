<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'prenom',
        'sexe',
        'telephone1',
        'telephone2',
        'pieceIdentite',
        'numeroPieceIdentite',
        'email',
        'password',
        'photo',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function paiement()
    {
        return $this->hasMany(paiement::class);
    }
    //many to many
    public function roles()
    {
        return $this->belongsToMany(Role::class,"user_role","user_id","role_id");

    }
    public function permissions()
    {
        return $this->belongsToMany(permission::class,"user_permission","user_id","permission_id");

    }

    public function hasRole($role)
    {
        return $this->roles()->where("nom",$role)->first() !=null;
    }

    public function hasAnyRole($roles)
    {
        return $this->roles()->whereIn("nom",$roles)->first() !=null;

    }

    public function getAllRolesNamesAttribute()
    {
        return $this->roles->implode("nom"," | ");
    }
}
