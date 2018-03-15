<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class TipoPlato extends Model
{
	use Notifiable;

		protected $table = 'tipo_plato';

	protected $fillable = [
	    'name', 'codigo', 'sal' , 'cocina', 'tp_color', 'idmodalidad', 'sal'
	];
}
