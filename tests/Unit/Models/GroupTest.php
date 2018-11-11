<?php

namespace Tests\Unit\Models;

use App\Group;
use App\User;
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
        $user = factory(User::class)->create();
        $group = factory(Group::class)->create();

        $group->users()->attach($user);

        $this->assertInstanceOf(User::class, $group->users()->first());
        $this->assertEquals($user->id, $group->users()->first()->id);
    }
}