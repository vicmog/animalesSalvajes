<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carta extends Model
{
    use HasFactory;
    protected $table = 'table_carta';
    public $timestamps = false;
    protected $fillable = ['url','nombre','descripcion'];
    
        public function preguntas() {
             
         return $this->hasMany('App\Models\Pregunta', 'idCarta');
         
         }
}
