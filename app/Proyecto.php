<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model {



	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'MM_PROYECTOS';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $primaryKey = 'MM_PROYECTO_ID';
	protected $fillable = ['MM_PROYECTO_NOMBRE', 'MM_PROYECTO_DESCRIPCION'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['created_at', 'updated_at'];

	public function participante()
	{
		return $this->hasMany('App\Participante');
	}

	public function canvas()
	{
		return $this->hasOne('App\Canvas');
		//return $this->hasManyThrough('App\Comuna','App\Region','pais_id','region_id','id');
	}

}
