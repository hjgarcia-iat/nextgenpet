<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends \Spatie\Permission\Models\Permission
{
    /**
     * Fillable fields
     *
     * @var array
     */
	protected $fillable = ['name'];
}
