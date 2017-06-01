<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Canvas extends Model {



	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'MM_CANVAS';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $primaryKey = 'MM_CANVAS_ID';
	protected $fillable = ['MM_CANVAS_PROPUESTA_VALOR', 'MM_CANVAS_SEGMENTO_CLIENTES', 'MM_CANVAS_RELACION_CLIENTES', 'MM_CANVAS_CANAL', 'MM_CANVAS_FLUJO_INGRESOS', 'MM_CANVAS_RECURSOS_CLAVES', 'MM_CANVAS_ACTIVIDADES_CLAVES', 'MM_CANVAS_SOCIOS_CLAVES', 'MM_CANVAS_ESTRUCTURA_COSTOS', 'MM_PROYECTO_ID'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['created_at', 'updated_at'];

	public function proyectos()
	{
		return $this->belongsTo('App\Proyecto');
	}


}
