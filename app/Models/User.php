<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'nom', 'email', 'telephone', 'mot_de_passe_hash', 'rôle', 'statut',
    ];

    protected $hidden = [
        'mot_de_passe_hash',
    ];

    public function profil()
    {
        return $this->hasOne(Profil::class);
    }

    public function produits()
    {
        return $this->hasMany(produit::class, 'produit_id');
    }

    public function orders()
    {
        return $this->hasMany(Commande::class, 'acheteur_id');
    }

    // public function deliveries()
    // {
    //     return $this->hasMany(Delivery::class, 'transporteur_id');
    // }

    // public function ratings()
    // {
    //     return $this->hasMany(Rating::class, 'rater_id');
    // }

    // public function payments()
    // {
    //     return $this->hasMany(Payment::class, 'payer_id');
    // }

    // public function wallet()
    // {
    //     return $this->hasOne(Wallet::class);
    // }
}

// class User extends Authenticatable
// {
//     /** @use HasFactory<\Database\Factories\UserFactory> */
//     use HasFactory, Notifiable;

//     /**
//      * The attributes that are mass assignable.
//      *
//      * @var list<string>
//      */
//     protected $fillable = [
//         'name',
//         'email',
//         'password',
//     ];

//     /**
//      * The attributes that should be hidden for serialization.
//      *
//      * @var list<string>
//      */
//     protected $hidden = [
//         'password',
//         'remember_token',
//     ];

//     /**
//      * Get the attributes that should be cast.
//      *
//      * @return array<string, string>
//      */
//     protected function casts(): array
//     {
//         return [
//             'email_verified_at' => 'datetime',
//             'password' => 'hashed',
//         ];
//     }
// }
