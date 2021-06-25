<?php

namespace Tests\Factories;

use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;

/**
 * Class UserFactory
 */
class UserFactory
{
    public static function createAdminUser(array $userOverrides = [], array $roleOverrides = [])
    {
        return self::createUser($userOverrides, ['name' => 'admin']);
    }

    public static function createUser(array $userOverrides = [], array $roleOverrides = [])
    {
        $user = User::factory()->create($userOverrides);

        if(isset($roleOverrides['name']) AND Role::whereName($roleOverrides['name'])->exists()) {
            $role = Role::whereName($roleOverrides['name'])->first();
        } else {
            $role = Role::factory()->create($roleOverrides);
        }

        $user->account()->create(['first_name' => 'test', 'last_name' => 'user']);

        $user->assignRole($role);

        return $user;
    }


    public static function getValidUserParams($overrides = []): array
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