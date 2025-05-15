<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $fillable = ['acheteur_id', 'zone_id', 'statut', 'total'];

    public function buyer()
    {
        return $this->belongsTo(User::class, foreignKey: 'acheteur_id');
    }

    public function items()
    {
        return $this->hasMany( LigneCommande ::class);
    }

    // public function delivery()
    // {
    //     return $this->hasOne(Delivery::class);
    // }

    // public function zone()
    // {
    //     return $this->belongsTo(Zone::class, 'zone_id');
    // }

    // public function payment()
    // {
    //     return $this->hasOne(Payment::class);
    // }
}
