<?php

namespace Tests\Unit\Models;

use App\College;
use App\State;
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

    public function test_we_can_get_the_college_relationship()
    {
        $state = factory(State::class)->create();
        $college = factory(College::class)->create(['state_id' => $state->id]);

        $this->assertInstanceOf(College::class, $state->colleges()->first());
        $this->assertEquals($college->id, $state->colleges()->first()->id);
        $this->assertEquals($college->state_id, $state->id);
    }

}