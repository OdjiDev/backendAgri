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

/*************  ✨ Windsurf Command 🌟  *************/
    /**
     * The ratings that belong to the Produit
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    // public function ratings(): MorphMany
    // public function ratings()
    // {
    //     return $this->morphMany(Rating::class, 'cible');
    // }
/*******  f2af28be-ecf3-4c66-9473-478a43088e09  *******/
}

