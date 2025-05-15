<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $fillable = [
        'user_id', 'adresse', 'region_id', 'entreprise'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function region()
    // {
    //     return $this->belongsTo(Zone::class, 'region_id');
    // }
}
