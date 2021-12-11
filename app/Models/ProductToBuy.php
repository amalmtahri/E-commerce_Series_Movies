<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductToBuy extends Model
{
    use HasFactory;
    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function product()
    {
       if( $this->season_id != null){
        return $this->belongsTo(Season::class,'season_id');
       }
       else{
         return $this->belongsTo(Movie::class,'movie_id');
       }
    }
}
