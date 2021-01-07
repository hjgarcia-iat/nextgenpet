<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{

    /**
     * Columns that area Searchable by Eloquence
     *
     * @var array
     */
    protected $searchableColumns = [
        'name',
        'abbr',
    ];

    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'abbr',
        'name',
    ];

    /**
     * Table Name
     *
     * @var string
     */
    protected $table = 'us_states';
    /**
     * Timestamps
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Return College Relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function colleges()
    {
        return $this->hasMany(College::class);
    }
}
