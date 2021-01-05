<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{

    /**
     * Table Name
     *
     * @var string
     */
    protected $table = 'user_groups';

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
