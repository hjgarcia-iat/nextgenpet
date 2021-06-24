<?php

namespace App\Models;

class Permission extends \Spatie\Permission\Models\Permission
{
    /**
     * Fillable fields
     *
     * @var array
     */
	protected $fillable = ['name'];
}
