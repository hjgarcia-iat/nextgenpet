<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

/**
 * App\Zip
 *
 * @property int    $id
 * @property string $zip_code
 * @property string $city
 * @property string $state_name
 * @property string $state_prefix
 * @property string $county
 * @property float  $lat
 * @property float  $lon
 * @method static \Illuminate\Database\Query\Builder|\App\Zip whereCity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Zip whereCounty($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Zip whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Zip whereLat($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Zip whereLon($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Zip whereStateName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Zip whereStatePrefix($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Zip whereZipCode($value)
 * @mixin \Eloquent
 */
class Zip extends Model
{

    /**
     * Table Name
     *
     * @var string
     */
    protected $table = 'zip_code_US';

    /**
     * Turn the timestamps off
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Searchable fields
     *
     * @var array
     */
    protected $searchable = [
        'zip_code',
    ];
}
