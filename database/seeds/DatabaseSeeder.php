<?php

use App\Models\Account;
use App\Models\College;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

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
