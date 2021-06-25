<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

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
     */
    public function colleges(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(College::class);
    }
}
