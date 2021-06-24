<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    use HasFactory;

    /**
     * Fillable fields
     * @var array
     */
    protected $fillable = ['name'];
}
