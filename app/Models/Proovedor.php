<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proovedor extends Model
{
    use HasFactory;
    protected $table ='proovedor';

    public function librosp(){
        $this -> hasMany('App\Models\Libro','proovedor_id','id');
    }
}
