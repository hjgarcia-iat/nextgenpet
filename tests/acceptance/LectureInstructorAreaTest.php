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
    public function we_can_see_instructor_mse_page()
    {
        $user = $this->createNextGenPetUser();

        $this->actingAs($user)
            ->visit('/lecture-style-class/instructor/magnetism-and-static-electricity-module')
            ->see('MAGNETISM & STATIC ELECTRICITY MODULE');
    }

    /**
     * @test
     */
    public function we_can_see_instructor_ie_page()
    {
        $user = $this->createNextGenPetUser();

        $this->actingAs($user)
            ->visit('/lecture-style-class/instructor/interactions-and-energy-module')
            ->see('INTERACTIONS & ENERGY MODULE');
    }

    /**
     * @test
     */
    public function we_can_see_instructor_if_page()
    {
        $user = $this->createNextGenPetUser();

        $this->actingAs($user)
            ->visit('/lecture-style-class/instructor/interactions-and-forces-module')
            ->see('INTERACTIONS &amp; FORCES MODULE');
    }

    /**
     * @test
     */
    public function we_can_see_instructor_wsl_page()
    {
        $user = $this->createNextGenPetUser();

        $this->actingAs($user)
            ->visit('/lecture-style-class/instructor/waves-sound-and-light-module')
            ->see('WAVES, SOUND & LIGHT MODULE');
    }

    /**
     * @test
     */
    public function we_can_see_instructor_mi_page()
    {
        $user = $this->createNextGenPetUser();

        $this->actingAs($user)
            ->visit('/lecture-style-class/instructor/matter-and-interactions-module')
            ->see('MATTER & INTERACTIONS MODULE');
    }

    /**
     * @test
     */
    public function we_can_see_instructor_tl_page()
    {
        $user = $this->createNextGenPetUser();

        $this->actingAs($user)
            ->visit('/lecture-style-class/instructor/teaching-and-learning')
            ->assertResponseStatus(200);
    }
}