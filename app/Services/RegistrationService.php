<?php

namespace App\Services;

use App\College;
use App\State;
use App\User;
use App\Zip;
use Carbon\Carbon;

/**
 * Class Registration
 * @package App\Services
 */
class RegistrationService
{
    /**
     * Register a User
     *
     * @return mixed|User
     * @throws \Throwable
     */
    public function register()
    {
        \DB::beginTransaction();
        //create college
        if(!$zip = Zip::whereZipCode(request()->get('zip'))->first()) \DB::rollBack();

        if(!$state = State::whereAbbr($zip->state_prefix)->first()) \DB::rollBack();
        //create college
        $college = $this->createCollege($state, $zip);
        //create the user
        $user = $this->createUser();
        //attach college to teacher
        $user->colleges()->attach($college);
        //attach the role
        $user->assignRole('nextgen_pet_user');

        \DB::commit();

        return $user;
    }

    /**
     * Create user
     * @return User
     */
    private function createUser()
    {
        $user = User::create([
            'email'              => request()->get('register_email'),
            'username'           => request()->get('register_email'),//needed for database
            'account_status'     => 'Pending',
            'user_group_id'      => 1,//needed for database
            'account_expiration' => Carbon::now()->addYear(4),//needed for database
            'order_number'       => 'NextGenPET',//needed for database
        ]);

        $user->account()->create([
            'first_name' => request()->get('first_name'),
            'last_name'  => request()->get('last_name'),
        ]);
        return $user;
    }

    /**
     * Create College
     * @param $state
     * @param $zip
     * @return College
     */
    private function createCollege($state, $zip)
    {
        $college = College::create([
            'name'     => request()->get('institution'),
            'state_id' => $state->id,
            'address'  => '-',
            'city'     => $zip->city,
            'zip'      => $zip->zip_code,
        ]);
        return $college;
    }
}