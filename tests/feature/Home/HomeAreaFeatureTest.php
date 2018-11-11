<?php

namespace Tests\Feature\Home;

use Tests\TestCase;

/**
 * Class HomeAreaFeatureTest
 * @package Tests\Feature\Home
 */
class HomeAreaFeatureTest extends TestCase
{
    public function test_we_can_see_the_home_page()
    {
        $this->get('/')->assertResponseStatus(200);
    }

    public function test_we_can_see_the_module_and_units_page()
    {
        $this->get('about/module-and-units')->assertResponseStatus(200);
    }

    public function test_we_can_see_the_overview_of_extensions_page()
    {
        $this->get('about/overview-of-extensions')->assertResponseStatus(200);
    }

    public function test_we_can_see_the_overview_of_teaching_and_learning_materials_page()
    {
        $this->get('about/overview-of-teaching-and-learning-activities')->assertResponseStatus(200);
    }

    public function test_we_can_see_the_overview_of_planning_and_conducting_page()
    {
        $this->get('about/overview-of-pcim')->assertResponseStatus(200);
    }

    public function test_we_can_see_the_overview_of_engineering_design_activities_page()
    {
        $this->get('about/engineering-design-activities')->assertResponseStatus(200);
    }

    public function test_we_can_see_the_ngss_and_next_gen_pet_page()
    {
        $this->get('about/ngss-and-next-gen-pet')->assertResponseStatus(200);
    }

    public function test_we_can_see_the_implentation_versions_page()
    {
        $this->get('about/implementation-versions')->assertResponseStatus(200);
    }

    public function test_we_can_see_the_about_the_development_staff_page()
    {
        $this->get('about/development-staff')->assertResponseStatus(200);
    }

    public function test_we_can_see_the_faculty_online_learning_community_for_ngp_page()
    {
        $this->get('about/faculty-online-learning')->assertResponseStatus(200);
    }

    public function test_we_can_see_the_flexibility_page()
    {
        $this->get('about/faculty-online-learning')->assertResponseStatus(200);
    }

    public function test_we_can_see_the_research_based_page()
    {
        $this->get('about/research-based')->assertResponseStatus(200);
    }

    public function test_we_can_see_the_terms_and_conditions_page()
    {
        $this->get('about/flexibility')->assertResponseStatus(200);
    }

    public function test_we_can_see_the_privacy_policy_page()
    {
        $this->get('privacy-policy')->assertResponseStatus(200);
    }
}
