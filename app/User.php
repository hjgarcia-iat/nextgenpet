<?php

namespace App;

use App\Notifications\ResetPasswordNotification;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

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
