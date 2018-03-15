<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Semana extends Model
{
    use Notifiable;

    protected $table = 'semanas';

    protected $fillable = [
        'numero', 'desde', 'hasta' , 'origen', 'estado'
    ];

    protected $dates = [
    	 'desde', 'hasta' , 'origen'
    ];

    public function getDesdeAttribute($date){
    	return new Date($date);
    } 

    public function getHastaAttribute($date){
    	return new Date($date);
    } 
}
