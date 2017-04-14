<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\State
 *
 * @property int $id
 * @property string $abbr
 * @property string $name
 * @property int $sales_person_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\District[] $districts
 * @method static \Illuminate\Database\Query\Builder|\App\State whereAbbr($value)
 * @method static \Illuminate\Database\Query\Builder|\App\State whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\State whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\State whereSalesPersonId($value)
 * @mixin \Eloquent
 */
class State extends Model
{
	protected $table = 'us_states';

	public function college()
	{
		return $this->hasOne(College::class);
	}
}
