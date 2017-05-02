<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\State
 *
 * @property int                                                           $id
 * @property string                                                        $abbr
 * @property string                                                        $name
 * @property int                                                           $sales_person_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\District[] $districts
 * @method static \Illuminate\Database\Query\Builder|\App\State whereAbbr($value)
 * @method static \Illuminate\Database\Query\Builder|\App\State whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\State whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\State whereSalesPersonId($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\College[]  $colleges
 */
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
     * Return School District Relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function districts()
    {
        return $this->hasMany(District::class);
    }

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
