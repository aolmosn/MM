<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'MM_COMUNAS';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $primaryKey = 'MM_COMUNA_ID';
	protected $fillable = ['MM_COMUNA_NOMBRE', 'MM_REGION_ID'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['created_at', 'updated_at'];

	public function regiones()
	{
		return $this->belongsTo('App\Region');
	}

	public function datos()
	{
		return $this->hasMany('App\Dato');
	}

}
