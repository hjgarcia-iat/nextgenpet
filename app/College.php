<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;

    /**
     * Table Name
     *
     * @var string
     */
    protected $table = 'colleges';

    /**
     * Columns that area Searchable by Eloquence
     *
     * @var array
     */
    protected $searchableColumns = [
        'name',
        'zip',
        'city',
    ];

    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'state_id',
        'name',
        'address',
        'city',
        'zip',
    ];

    /**
     * Get full address
     *
     * @return string
     */
    public function getFullAddressAttribute()
    {
        return $this->name . ' - ' . $this->address . ' ' . $this->state->abbr . ', ' . $this->zip;
    }

    /**
     * Return State Relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function state()
    {
        return $this->belongsTo(State::class);
    }

    /**
     * Return User Relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'college_user')->withTimestamps();
    }
}
