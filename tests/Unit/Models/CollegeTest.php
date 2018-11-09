<?php

namespace Tests\Unit\Models;

use App\College;
use App\State;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Collection;
use Tests\TestCase;

/**
 * Class CollegeTest
 * @package Tests\Unit\Models
 */
class CollegeTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    public function test_we_can_get_the_full_address_attribute()
    {
        $collegeName = 'Test College';
        $address     = '123 Street';
        $zip         = 11111;
        $state       = factory(State::class)->create(['abbr' => 'NY']);
        $college     = factory(College::class)->create([
            'state_id' => $state->id,
            'address'  => $address,
            'name'     => $collegeName,
            'zip'      => $zip,
        ]);

        $this->assertEquals('Test College - 123 Street NY, 11111', $college->fullAddress);
    }

    public function test_we_can_get_the_state_relationship()
    {
        $college = factory(College::class)->create();

        $this->assertInstanceOf(State::class, $college->state);
    }

    public function test_we_can_get_the_user_relationship()
    {
        $college = factory(College::class)->create();
        $user    = factory(User::class)->create();

        $college->users()->attach($user);

        $this->assertInstanceOf(User::class, $college->users()->first());
        $this->assertInstanceOf(Collection::class, $college->users);
    }

}