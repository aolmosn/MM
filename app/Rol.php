<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'MM_ROL';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $primaryKey = 'MM_ROL_ID';
	protected $fillable = ['MM_ROL_DESCRIPCION'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['created_at', 'updated_at'];

	public function participantes()
	{
		return $this->hasMany('App\Participante');
	}

	


}
