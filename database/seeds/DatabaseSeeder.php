<?php

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
        $role = factory(Role)->create(['name' => 'nextgen_pet_user']);
        $college = factory(College::class)->create();
        $user = factory(User::class)->create(['email' => 'hjgarcia1@gmail.com','password' => '1234']);
    }
}
