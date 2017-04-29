<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class StudioStyleAreaTest
 */
class StudioStyleAreaTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @test
     */
    public function we_can_see_the_studio_style_home_page()
    {
        $this->visit('studio-style-class')
            ->see('STUDIO STYLE CLASS')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_pedagogy_page()
    {
        $this->visit('studio-style-class/pedagogy')
            ->see('STUDIO STYLE CLASS')
            ->see('PEDAGOGY')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_toc_page()
    {
        $this->visit('studio-style-class/table-of-contents')
            ->see('STUDIO STYLE CLASS')
            ->see('TABLE OF CONTENTS WITH TIME ESTIMATES')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_content_mse_page()
    {
        $this->visit('studio-style-class/content/magnetism-and-static-electricity-module')
            ->see('STUDIO STYLE CLASS')
            ->see('UNIT M: DEVELOPING A MODEL FOR MAGNETISM')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_content_ie_page()
    {
        $this->visit('studio-style-class/content/interactions-and-energy-module')
            ->see('STUDIO STYLE CLASS')
            ->see('UNIT EM: ENERGY-BASED MODEL FOR INTERACTIONS')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_content_if_page()
    {
        $this->visit('studio-style-class/content/interactions-and-forces-module')
            ->see('STUDIO STYLE CLASS')
            ->see('UNIT FM: FORCE-BASED MODEL FOR INTERACTIONS')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_content_wsl_page()
    {
        $this->visit('studio-style-class/content/waves-sound-and-light-module')
            ->see('STUDIO STYLE CLASS')
            ->see('UNIT WS: MECHANICAL WAVES AND SOUND')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_teaching_and_learning_general_page()
    {
        $this->visit('studio-style-class/teaching-and-learning/general-lessons-and-extensions')
            ->see('STUDIO STYLE CLASS')
            ->see('TEACHING & LEARNING — GENERAL ACTIVITIES & EXTENSIONS')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_teaching_and_learning_mse_page()
    {
        $this->visit('studio-style-class/teaching-and-learning/magnetism-and-static-electricity-module')
            ->see('STUDIO STYLE CLASS')
            ->see('TEACHING & LEARNING — MODULE MSE CLUSTER')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_teaching_and_learning_ie_page()
    {
        $this->visit('studio-style-class/teaching-and-learning/interactions-and-energy-module')
            ->see('STUDIO STYLE CLASS')
            ->see('TEACHING & LEARNING — MODULE IE CLUSTER')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_teaching_and_learning_if_page()
    {
        $this->visit('studio-style-class/teaching-and-learning/interactions-and-forces-module')
            ->see('STUDIO STYLE CLASS')
            ->see('TEACHING & LEARNING — MODULE IF CLUSTER')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_teaching_and_learning_wsl_page()
    {
        $this->visit('studio-style-class/teaching-and-learning/waves-sound-and-light-module')
            ->see('STUDIO STYLE CLASS')
            ->see('TEACHING & LEARNING — MODULE WSL CLUSTER')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_teaching_and_learning_mi_page()
    {
        $this->visit('studio-style-class/teaching-and-learning/matter-and-interactions-module')
            ->see('STUDIO STYLE CLASS')
            ->see('TEACHING & LEARNING — MODULE MI CLUSTER')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_extension_index_page()
    {
        $this->visit('studio-style-class/extension-index')
            ->see('STUDIO STYLE CLASS')
            ->see('EXTENSION INDEX')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_demo_movies_and_sims_page()
    {
        $this->visit('studio-style-class/demonstration-movies-and-simulations')
            ->see('STUDIO STYLE CLASS')
            ->see('DEMONSTRATION MOVIES & SIMULATIONS')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_classroom_videos_page()
    {
        $this->visit('studio-style-class/classroom-videos')
            ->see('STUDIO STYLE CLASS')
            ->see('CLASSROOM VIDEOS')
            ->assertResponseStatus(200);
    }
}