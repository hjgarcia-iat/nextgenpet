<?php

namespace Tests\Unit\Models;

use App\Account;
use App\College;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

/**
 * Class UserTest
 * @package Tests\Unit\Models
 */
class UserTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    public function test_we_can_get_account_relationship()
    {
        $account = factory(Account::class)->create();

        $this->assertInstanceOf(Account::class, User::find($account->user_id)->account);
    }

    public function test_we_can_get_the_college_relationship()
    {
        $user = factory(User::class)->create();
        $college = factory(College::class)->create();

        $user->colleges()->attach($college);

        $this->assertInstanceOf(College::class, $user->colleges()->first());
    }

    public function test_we_can_get_name_attribute()
    {
        $account = factory(Account::class)->create(['first_name' => 'John', 'last_name' => 'Doe']);

        $this->assertEquals('John Doe', User::find($account->user_id)->name);
    }

    public function test_we_can_hash_password()
    {
        $user = factory(User::class)->make(['password' => 'password']);

        $this->assertTrue(\Hash::check('password', $user->password));
    }

}