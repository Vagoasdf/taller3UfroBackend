<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
     protected $table='noticia';

     public function usuario(){
     	return $this->belongsTo('App\User');
     }
     public function categoria(){
     	return $this->belongsTo('App\Categoria');
     }
}
