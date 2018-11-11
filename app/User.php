<?php

namespace App;

use App\Notifications\ResetPasswordNotification;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

/**
 * App\User
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $hash
 * @property string $email
 * @property string $account_status
 * @property int $user_group_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $account_expiration
 * @property string $order_number
 * @method static \Illuminate\Database\Query\Builder|\App\User whereAccountExpiration($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereAccountStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereHash($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereOrderNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUserGroupId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUsername($value)
 * @mixin \Eloquent
 * @property-read \App\Account $account
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Role[] $roles
 * @property string $remember_token
 * @property-read string $name
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @method static \Illuminate\Database\Query\Builder|\App\User role($roles)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\College[] $colleges
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 */
class User extends Authenticatable
{

    use HasRoles, Notifiable;

    /**
     * Columns that area Searchable by Eloquence
     *
     * @var array
     */
    protected $searchableColumns = [
        'username',
        'email',
        'account.first_name',
        'account.last_name',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'username',
        'account_status',
        'user_group_id',
        'account_expiration',
        'order_number',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Update the model in the database.
     *
     * @param  array $attributes
     * @param  array $options
     *
     * @return bool|int
     */
    public function update(array $attributes = [], array $options = [])
    {
        if (!$this->exists) {
            return false;
        }

        $this->account->fill($attributes)->save($options);

        if(request()->has('password')) {
            $this->password = request()->get('password');
        }

        return $this->fill($attributes)->save($options);
    }

    /**
     * Account Relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function account()
    {
        return $this->hasOne(Account::class);
    }

    /**
     * Return College Class
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function colleges()
    {
        return $this->belongsToMany(College::class, 'college_user')->withTimestamps();
    }

    /**
     * Get the full name of the user
     *
     * @return string
     */
    public function getNameAttribute()
    {
        return $this->account->first_name . ' ' . $this->account->last_name;
    }

    /**
     * Has Password
     *
     * @param $value
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = \Hash::make($value);
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($this, $token));
    }
}
