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
     * @param array $data
     * @return College
     */
    public function createCollege($data = [])
    {
        $zip     = Zip::whereZipCode($data['zip'])->firstOrFail();
        $state   = State::whereAbbr($zip->state_prefix)->firstOrFail();
        $college = College::create([
            'name'     => $data['institution'],
            'state_id' => $state->id,
            'address'  => '-',
            'city'     => $zip->city,
            'zip'      => $zip->zip_code,
        ]);

        return $college;
    }
}
