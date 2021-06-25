<?php

namespace Tests\Unit\Models;

use App\Models\Group;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

/**
 * Class GroupTest
 * @package Tests\Unit\Models
 */
class GroupTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    public function test_we_can_return_the_user_relationship()
    {
        $group = Group::factory()->has(User::factory())->create();

        $this->assertEquals(User::first()->id, $group->users->first()->id);
    }
}