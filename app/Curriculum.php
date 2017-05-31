<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'MM_CURRICULUM';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['MM_COMUNA_ID'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['created_at', 'updated_at'];

	public function Comunas()
	{
		return $this->hasOne('App\Comuna');
	}

  public function Experiencias()
  {
    return $this->hasMany('App\Experiencia');
  }

  public function Habilidades()
  {
    return $this->hasMany('App\Habilidades')
  }

}
