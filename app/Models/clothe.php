<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class clothe extends Model
{
    protected $guarded = ['id','create_at','update_at'];

    public function category(){
        return $this->hasOne('App\category','id','id_category');
    }
}
