<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class HomeAreaTest
 */
class HomeAreaTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @test
     */
    public function we_can_see_the_home_page()
    {
        $this->visit('/')
            ->see('Home')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_flexibility_page()
    {
        $this->visit('about/flexibility')
            ->see('Flexibility')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_research_based_page()
    {
        $this->visit('about/research-based')
            ->see('RESEARCH-BASED')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_modules_and_units_page()
    {
        $this->visit('about/module-and-units')
            ->see('MODULES & UNITS')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_overview_extensions_page()
    {
        $this->visit('about/overview-of-extensions')
            ->see('OVERVIEW OF EXTENSIONS (HOMEWORK)')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_teaching_and_learning_page()
    {
        $this->visit('about/overview-of-teaching-and-learning-activities')
            ->see('OVERVIEW OF TEACHING & LEARNING MATERIALS')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_oveview_of_eng_design_activities_page()
    {
        $this->visit('about/engineering-design-activities')
            ->see('ENGINEERING DESIGN ACTIVITIES')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_ngss_and_next_gen_pet_page()
    {
        $this->visit('about/ngss-and-next-gen-pet')
            ->see('NGSS AND NEXT GEN PET')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_implementation_versions_page()
    {
        $this->visit('about/implementation-versions')
            ->see('IMPLEMENTATION VERSIONS')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_about_the_development_staff_page()
    {
        $this->visit('about/development-staff')
            ->see('ABOUT THE DEVELOPMENT STAFF')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_folc_page()
    {
        $this->visit('about/faculty-online-learning')
            ->see('FACULTY ONLINE LEARNING COMMUNITY FOR NGP')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_a_404_if_page_is_not_found()
    {
        $this->get('some-page')
            ->assertResponseStatus(404);
    }
}