<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Dato extends Model {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'MM_DATOS';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['MM_DATOS_NOMBRE', 'MM_DATOS_APELLIDO_PATERNO', 'MM_DATOS_APELLIDO_MATERNO', 'MM_DATOS_FECHA_NACIMIENTO', 'MM_DATOS_NACIONALIDAD', 'MM_DATOS_DIRECCION','MM_COMUNAS_ID', 'MM_CURRICULUMS_ID' ];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['created_at', 'updated_at'];

	public function comunas()
	{
		return $this->belongsTo('App\Comuna');
	}

  public function curriculum()
  {
    return $this->belongsTo('App\Curriculum');
  }

}
