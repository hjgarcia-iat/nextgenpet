<?php

use App\Role;
use App\User;
use Carbon\Carbon;

/**
 * Class UserFactory
 */
class UserFactory
{

    /**
     * Create a Valid Admin User with Role and Account
     *
     * @param array $userOverrides
     * @param array $roleOverrides
     * @return mixed|User
     */
    public static function createAdminUser($userOverrides = [], $roleOverrides = [])
    {
        return self::createGeneralUser($userOverrides, ['name' => 'admin']);
    }

    /**
     * Create a Super Admin User
     *
     * @param array $userOverrides
     * @return User|mixed
     */
    public static function createSuperAdminUser($userOverrides = [])
    {
        return self::createGeneralUser($userOverrides, ['name' => 'super_admin']);
    }

    /**
     * Create a NextGen PET User
     *
     * @param array $userOverrides
     * @return User|mixed
     */
    public static function createNextGenPetUser($userOverrides = [])
    {
        return self::createGeneralUser($userOverrides, ['name' => 'nextgen_pet_user']);
    }

    /**
     * Create General Student Portal Account
     *
     * @return mixed
     */
    public static function createStudentPortalUser()
    {
        //create the user
        $user = factory(User::class)->create(
            ['username' => 'iqwst-student-portal', 'email' => 'iqwst@email.com', 'password' => 'IQWST2018']
        );
        //create account details
        $user->account()->create(['first_name' => 'IQWST', 'last_name' => 'Student']);

        return $user;
    }


    /**
     * Create a general user
     *
     * @param array $userOverrides
     * @param array $roleOverrides
     * @return mixed|User
     */
    public static function createGeneralUser($userOverrides = [], $roleOverrides = [])
    {
        $user = factory(User::class)->create($userOverrides);

        if(isset($roleOverrides['name']) AND Role::whereName($roleOverrides['name'])->exists()) {
            $role = Role::whereName($roleOverrides['name'])->first();
        } else {
            $role = factory(Role::class)->create($roleOverrides);
        }

        $user->account()->create(['first_name' => 'test', 'last_name' => 'user']);

        $user->assignRole($role);

        return $user;
    }

    /**
     * Get valid Params for User Form
     *
     * @param array $overrides
     * @return array
     */
    public static function getValidUserParams($overrides = [])
    {
        return array_merge([
            'role'                  => ['admin'],
            'first_name'            => 'John',
            'last_name'             => 'Doe',
            'email'                 => 'jdoe@email.com',
            'password'              => 'some-password',
            'password_confirmation' => 'some-password',
            'username'              => 'jdoe@email.com',
            'account_status'        => 'Active',
            'account_expiration'    => Carbon::now()->addMonth(1)->format('m/d/Y'),
        ], $overrides);

    }
}