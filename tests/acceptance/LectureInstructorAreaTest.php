<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class LectureInstructorAreaTest
 */
class LectureInstructorAreaTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @test
     */
    public function we_cannot_see_instructor_area_as_guest_user()
    {
        $this->visit('lecture-style-class/instructor/magnetism-and-static-electricity-module')
            ->seePageIs(route('login.create'));
    }
}