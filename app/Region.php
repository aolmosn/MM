<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'MM_REGIONES';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $primaryKey = 'MM_REGION_ID';
	protected $fillable = ['MM_REGION_NOMBRE', 'MM_PAIS_ID'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['created_at', 'updated_at'];

	public function pais()
	{
		return $this->belongsTo('App\Pais');
	}

	public function comuna()
	{
		return $this->hasMany('App\comuna');
	}


}
