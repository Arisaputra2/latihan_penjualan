<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $guarded = ['id','create_at','update_at'];

    public function category(){
        return $this->hasOne('App\category','id','id_category');
    }
}
