<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Permission
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Role[] $roles
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @method static \Illuminate\Database\Query\Builder|\App\Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Permission whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Permission whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Permission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Permission extends \Spatie\Permission\Models\Permission
{
    /**
     * Fillable fields
     *
     * @var array
     */
	protected $fillable = ['name'];
}
