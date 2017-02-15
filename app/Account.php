<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Account
 *
 * @property int $id
 * @property int $user_id
 * @property string $first_name
 * @property string $last_name
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Query\Builder|\App\Account whereFirstName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Account whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Account whereLastName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Account whereUserId($value)
 * @mixin \Eloquent
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Account whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Account whereUpdatedAt($value)
 */
class Account extends Model
{

	/**
	 * Table Name
	 *
	 * @var string
	 */
    protected $table = 'accounts';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'first_name',
		'last_name',
	];

	/**
	 * User model relationship
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
