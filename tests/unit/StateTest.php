<?php

use App\College;
use App\State;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class StateTest extends TestCase
{

	/**
	 * A basic functional test example.
	 *
	 * @test
	 * @return void
	 */
	public function it_has_a_college_relationship()
	{
		$state = new State();

		$this->assertInstanceOf(College::class, $state->college);
	}
}
