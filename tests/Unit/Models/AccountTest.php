<?php

namespace Tests\Unit\Models;

use App\Account;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Class AccountTest
 * @package Tests\Unit\Models
 */
class AccountTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_has_all_fields()
    {
        $data = [
            'user_id' => 1,
            'first_name' => 'John',
            'last_name' => 'Doe',
        ];

        Account::factory()->create($data);

        $this->assertDatabaseHas('accounts', $data);
    }

    public function test_we_can_return_the_user_relationship()
    {
        $account = Account::factory()->create();

        $this->assertEquals(User::first()->id, $account->user->id);
    }
}