<?php

namespace Tests\Unit\Models;

use App\College;
use App\State;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;
use Tests\TestCase;

/**
 * Class CollegeTest
 * @package Tests\Unit\Models
 */
class CollegeTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_has_the_all_the_fields()
    {
        $data = [
            'state_id' => 1,
            'name' => 'name',
            'address' => 'address',
            'city' => 'city',
            'zip' => '111',
        ];

        College::factory()->create($data);

        $this->assertDatabaseHas('colleges', $data);
    }


    public function test_we_can_get_the_full_address_attribute()
    {
        $college = College::factory()
            ->for(State::factory()->state([
                'abbr' => 'NY',
            ]))->create([
                'name' => 'Test College',
                'address' => '123 Street',
                'city' => 'city',
                'zip' => '11111',
            ]);

        $this->assertEquals('Test College - 123 Street NY, 11111', $college->fullAddress);
    }

    public function test_we_can_get_the_state_relationship()
    {
        $state = State::factory()->create();
        $college = College::factory()->for($state)->create();

        $this->assertEquals($college->state_id, $state->id);
    }

    public function test_we_can_get_the_user_relationship()
    {
        $user = User::factory()->create();
        $college = College::factory()->hasAttached($user)->create();

        $this->assertEquals($user->id, $college->users->first()->id);
    }

}