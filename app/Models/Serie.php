<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function seasons()
    {
        return $this->hasMany('App\Models\Season');
    }

}
