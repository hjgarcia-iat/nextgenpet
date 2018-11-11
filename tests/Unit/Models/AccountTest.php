<?php

namespace Tests\Unit\Models;

use App\Account;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

/**
 * Class AccountTest
 * @package Tests\Unit\Models
 */
class AccountTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    public function test_we_can_return_the_user_relationship()
    {
        $account = factory(Account::class)->create();

        $this->assertInstanceOf(User::class, $account->user);
    }
}