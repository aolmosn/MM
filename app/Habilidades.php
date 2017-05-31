<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Habilidades extends Model {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'MM_HABILIDADES';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['MM_EXPERIENCIA_DESDE', 'MM_EXPERIENCIA_HASTA', 'MM_EXPERIENCIA_INSTITUCION', 'MM_EXPERIENCIA_DETALLES','MM_CURRICULUM_ID'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['created_at', 'updated_at'];

	public function Curriculums()
	{
		return $this->belongsTo('App\Curriculum');
	}

}
