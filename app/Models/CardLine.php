<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardLine extends Model
{
    use HasFactory;


    public function productToBuy(){

        //$var=$this->belongsTo(ProductToBuy::class,'productToBuy_id');
       // dd($var);
        return $this->belongsTo(ProductToBuy::class,'productToBuy_id');
    }
}
