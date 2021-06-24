<?php

namespace Tests\Unit\Models;

use App\Models\Account;
use App\Models\College;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Class UserTest
 * @package Tests\Unit\Models
 */
class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_has_the_all_the_fields()
    {
        $data = [
            'username' => 'username',
            'email' => 'email@email.com',
            'account_status' => 'Active',
        ];

        User::factory()->create($data);

        $this->assertDatabaseHas('users', $data);
    }

    public function test_we_can_get_account_relationship()
    {
        $user = User::factory()->create()->tap(function ($user) {

            Account::factory()->create(['user_id' => $user->first()->id]);

            return $user->first();
        });

        $this->assertEquals(Account::first()->id, $user->account->id);
    }

    public function test_we_can_get_the_college_relationship()
    {
        $user = User::factory()->create()->tap(function ($user) {

            Account::factory()->create(['user_id' => $user->first()->id]);

            return $user->first();
        });

        $college = College::factory()->hasAttached($user)->create();

        $this->assertEquals($college->id, $user->colleges->first()->id);
    }

    public function test_we_can_get_name_attribute()
    {
        $user = User::factory()->create()->tap(function ($user) {

            Account::factory()->create([
                'user_id' => $user->first()->id,
                'first_name' => 'John',
                'last_name' => 'Doe',
            ]);

            return $user->first();
        });

        $this->assertEquals('John Doe', $user->fresh()->name);
    }

    public function test_we_can_hash_password()
    {
        $user = User::factory()->create()->tap(function ($user) {

            Account::factory()->create(['user_id' => $user->first()->id]);

            return $user->first();
        });

        $this->assertTrue(\Hash::check('password', $user->password));
    }

}