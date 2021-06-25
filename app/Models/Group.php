<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{

    use HasFactory;

    /**
     * Table Name
     *
     * @var string
     */
    protected $table = 'user_groups';

    /**
     * User Relationship
     */
    public function users(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_roles', 'user_group_id', 'user_id');
    }
}
