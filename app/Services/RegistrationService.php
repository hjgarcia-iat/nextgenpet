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
        $user = \DB::transaction(function () {
            //create the user
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


            //create college
            $zip     = Zip::whereZipCode(request()->get('zip'))->first();
            $state   = State::whereAbbr($zip->state_prefix)->first();
            $college = College::create([
                'name'     => request()->get('institution'),
                'state_id' => $state->id,
                'address'  => '-',
                'city'     => $zip->city,
                'zip'      => $zip->zip_code,
            ]);

            //attach college to teacher
            $user->colleges()->attach($college);
            //attach the role
            $user->assignRole('nextgen_pet_user');

            return $user;
        });

        return $user;
    }
}