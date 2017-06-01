<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model {



	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'MM_PAISES';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $primaryKey = 'MM_PAIS_ID';
	protected $fillable = ['MM_PAIS_NOMBRE'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['created_at', 'updated_at'];

	public function region()
	{
		return $this->hasMany('App\Region');
	}

	public function comunas()
	{
		return $this->hasManyThrough('App\Comuna','App\Region');
		//return $this->hasManyThrough('App\Comuna','App\Region','pais_id','region_id','id');
	}

}
