<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LigneCommande extends Model
{
    protected $fillable = ['commande_id', 'produit_id', 'quantité', 'prix_unité'];

    public function order()
    {
        return $this->belongsTo(Commande::class);
    }

    public function produit()
    {
        return $this->belongsTo(produit::class);
    }
}
