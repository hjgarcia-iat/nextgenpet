<?php

use App\Account;
use App\User;
use App\College;
use Illuminate\Database\Seeder;
use App\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role    = factory(Role::class)->create(['name' => 'nextgen_pet_user']);
        $college = factory(College::class)->create();

        $user    = factory(User::class)->create(['email' => 'test@test.com', 'password' => '1234']);
        $account = factory(Account::class)->create(['user_id' => $user->id]);

        $user->colleges()->attach($college->id);
        $user->roles()->attach($role->id);
    }
}
