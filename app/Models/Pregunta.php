<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;
    protected $table = 'table_pregunta';
    public $timestamps = false;
    protected $fillable = ['idCarta','pregunta','opcion1','opcion2','opcion3','opcion4'];
    
    
    public function carta() {
             
         return $this->belongsTo('App\Models\Carta', 'idCarta');
         
    }
    
}
