<?php

namespace Tests\Unit\Models;

use App\Models\College;
use App\Models\State;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

/**
 * Class StateTest
 * @package Tests\Unit\Models
 */
class StateTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    public function test_it_has_all_the_fields()
    {
        $data = ['abbr' => 'test', 'name' => 'test'];

        State::factory()->create($data);

        $this->assertDatabaseHas('us_states', $data);
    }

    public function test_we_can_get_the_college_relationship()
    {
        $state = State::factory()->has(College::factory())->create();

        $this->assertEquals(College::first()->id, $state->colleges()->first()->id);
    }

}