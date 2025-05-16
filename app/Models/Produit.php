<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = [
        'producer_id', 'nom', 'description', 'prix', 'unité', 'catégorie_id', 'photo_url', 'stock'
    ];

    public function producteur()
    {
        return $this->belongsTo(User::class, 'producteur_id');
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'catégorie_id');
    }

    public function orderItems()
    {
        return $this->hasMany(LigneCommande::class);
    }

    // public function ratings()
    // {
    //     return $this->morphMany(Rating::class, 'cible');
    // } 
}

