<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class College
 *
 * @package App
 * @property int $id
 * @property int $user_id
 * @property int $state_id
 * @property string $name
 * @property string $address
 * @property string $city
 * @property string $zip
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\State $state
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Query\Builder|\App\College whereAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\College whereCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\College whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\College whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\College whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\College whereStateId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\College whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\College whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\College whereZip($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @property-read mixed $full_address
 */
class College extends Model
{
	/**
	 * Table Name
	 *
	 * @var string
	 */
	protected $table = 'colleges';

	/**
	 * Columns that area Searchable by Eloquence
	 *
	 * @var array
	 */
	protected $searchableColumns = [
		'name',
		'zip',
		'city',
	];

	/**
	 * Fillable fields
	 *
	 * @var array
	 */
	protected $fillable = [
		'state_id',
		'name',
		'address',
		'city',
		'zip',
	];

	public function getFullAddressAttribute()
	{
		return $this->name . ' - ' .  $this->address . ' ' . $this->state->abbr . ', ' . $this->zip;
	}


	/**
	 * Return State Relationship
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function state()
	{
		return $this->belongsTo(State::class);
	}

	/**
	 * Return User Relationship
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function users()
	{
		return $this->belongsToMany(User::class,'college_user')->withTimestamps();
	}
}
