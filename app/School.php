<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\School
 *
 * @property int $id
 * @property int $district_id
 * @property string $name
 * @property string $account_expiration
 * @method static \Illuminate\Database\Query\Builder|\App\School whereAccountExpiration($value)
 * @method static \Illuminate\Database\Query\Builder|\App\School whereDistrictId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\School whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\School whereName($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Subscription[] $subscriptions
 * @property-read \App\District $district
 */
class School extends Model
{
    protected $table = 'schools';

	/**
	 * Relation to district
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
    public function district()
    {
    	return $this->belongsTo(District::class);
    }
}
