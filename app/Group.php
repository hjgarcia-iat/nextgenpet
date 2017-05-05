<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Role
 *
 * @property int                                                       $id
 * @property string                                                    $name
 * @method static \Illuminate\Database\Query\Builder|\App\Role whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Role whereName($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 */
class Group extends Model
{

    /**
     * Table Name
     *
     * @var string
     */
    protected $table = 'user_groups';

    public $timestamps = false;

    /**
     * User Relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_roles', 'user_group_id', 'user_id');
    }
}
