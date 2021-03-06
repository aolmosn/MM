<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model {



	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'MM_PARTICIPANTES';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $primaryKey = 'MM_PARTICIPANTES_ID';
	protected $fillable = ['MM_USUARIO_CORREO', 'MM_PROYECTO_ID', 'MM_ROL_ID'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['created_at', 'updated_at'];

	public function proyectos()
	{
		return $this->hasMany('App\Region');
	}

	public funnction user()
	{
		return $this->hasMany('App\User');
	}

}
