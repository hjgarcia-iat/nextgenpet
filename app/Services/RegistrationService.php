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

        if(!$state = State::find(request('state_id'))) \DB::rollBack();

        //create college
        $college = $this->createCollege($state);
        //create the user
        $user = $this->createUser();
        //attach college to teacher
        $user->colleges()->attach($college);

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
     * @return College
     */
    private function createCollege($state)
    {
        $college = College::create([
            'name'     => request()->get('institution'),
            'state_id' => $state->id,
            'address'  => request()->get('address'),
            'city'     => request()->get('city'),
            'zip'      => request()->get('zip'),
        ]);
        return $college;
    }
}