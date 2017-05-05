<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role as SpatieRole;

/**
 * App\Role
 *
 * @property int                                                                                  $id
 * @property string                                                                               $name
 * @property int                                                                                  $level
 * @property \Carbon\Carbon                                                                       $created_at
 * @property \Carbon\Carbon                                                                       $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[]                            $users
 * @method static \Illuminate\Database\Query\Builder|\App\Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Role whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Role whereLevel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Role whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Role whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Query\Builder|\App\Role ordered($direction = 'asc')
 */
class Role extends SpatieRole
{
    /**
     * Fillable fields
     * @var array
     */
    protected $fillable = ['name'];
}
