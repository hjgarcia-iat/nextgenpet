<?php namespace App\Repositories;

use App\College;
use App\State;
use App\Zip;

/**
 * Class CollegeRepository
 * @package App\Repositories
 */
class CollegeRepository
{
    /**
     * Create College
     *
     * @param $zip
     * @param $name
     * @return College
     */
    public function create($zip, $name)
    {
        $zip     = Zip::whereZipCode($zip)->first();
        $state   = State::whereAbbr($zip->state_prefix)->first();
        $college = College::create([
            'name'     => $name,
            'state_id' => $state->id,
            'address'  => '-',
            'city'     => $zip->city,
            'zip'      => $zip->zip_code,
        ]);

        return $college;
    }
}
