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

    /**
     * @test
     */
    public function we_cannot_login_if_dont_have_the_correct_role()
    {
        $user = $this->createGenericUser(['password' => 'password']);

        $this->visit(route('login.create'))
            ->submitForm('Login', ['email' => $user->email, 'password' => 'password'])
            ->seePageIs(route('login.create'))
            ->see('You don\'t have access to this area.');
    }
}