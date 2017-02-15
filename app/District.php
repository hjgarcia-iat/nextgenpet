<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\District
 *
 * @property int                                                         $id
 * @property int                                                         $state_id
 * @property string                                                      $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\School[] $schools
 * @method static \Illuminate\Database\Query\Builder|\App\District whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\District whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\District whereStateId($value)
 * @mixin \Eloquent
 * @property-read \App\State $state
 */
class District extends Model
{

	protected $table = 'school_districts';

	public function state ()
	{
		return $this->belongsTo(State::class);
	}

	public function schools ()
	{
		return $this->hasMany(School::class);
	}
}
