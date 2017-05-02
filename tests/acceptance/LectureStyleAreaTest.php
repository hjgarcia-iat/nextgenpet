<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class LectureStyleAreaTest
 */
class LectureStyleAreaTest extends TestCase
{
    /**
     * @test
     */
    public function we_can_see_intro_page()
    {
        $this->visit('/lecture-style-class')
            ->see('Introduction')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_pedagogy_page()
    {
        $this->visit('/lecture-style-class/pedagogy')
            ->assertResponseStatus(200)
            ->see('PEDAGOGY');
    }

    /**
     * @test
     */
    public function we_can_see_toc_page()
    {
        $this->visit('lecture-style-class/table-of-contents')
            ->assertResponseStatus(200)
            ->see('TABLE OF CONTENTS WITH TIME ESTIMATES');
    }

    /**
     * @test
     */
    public function we_can_see_extension_index_page()
    {
        $this->visit('lecture-style-class/extension-index')
            ->assertResponseStatus(200)
            ->see('EXTENSION INDEX');
    }

    /**
     * @test
     */
    public function we_can_see_demo_movies_and_sims_page()
    {
        $this->visit('lecture-style-class/demonstration-movies-and-simulations')
            ->assertResponseStatus(200)
            ->see('DEMONSTRATION MOVIES & SIMULATIONS');
    }

    /**
     * @test
     */
    public function we_can_see_classroom_videos_page()
    {
        $this->visit('lecture-style-class/classroom-videos')
            ->assertResponseStatus(200)
            ->see('CLASSROOM VIDEOS');
    }

    /**
     * @test
     */
    public function we_can_see_the_content_mse_page()
    {
        $this->visit('lecture-style-class/content/magnetism-and-static-electricity-module')
            ->see('LECTURE STYLE CLASS')
            ->see('UNIT M: DEVELOPING A MODEL FOR MAGNETISM')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_content_ie_page()
    {
        $this->visit('/lecture-style-class/content/interactions-and-energy-module')
            ->see('LECTURE STYLE CLASS')
            ->see('UNIT EM: ENERGY-BASED MODEL FOR INTERACTIONS')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_content_if_page()
    {
        $this->visit('/lecture-style-class/content/interactions-and-forces-module')
            ->see('LECTURE STYLE CLASS')
            ->see('UNIT FM: FORCE-BASED MODEL FOR INTERACTIONS')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_content_wsl_page()
    {
        $this->visit('/lecture-style-class/content/waves-sound-and-light-module')
            ->see('LECTURE STYLE CLASS')
            ->see('UNIT WS: MECHANICAL WAVES AND SOUND')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_content_mi_page()
    {
        $this->visit('/lecture-style-class/content/matter-and-interactions-module')
            ->see('LECTURE STYLE CLASS')
            ->see('UNIT PC: PHYSICAL CHANGES')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_teaching_and_learning_general_page()
    {
        $this->visit('/lecture-style-class/teaching-and-learning/general-lessons-and-extensions')
            ->see('LECTURE STYLE CLASS')
            ->see('TEACHING & LEARNING — GENERAL LESSONS & EXTENSIONS')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_teaching_and_learning_mse_page()
    {
        $this->visit('/lecture-style-class/teaching-and-learning/magnetism-and-static-electricity-module')
            ->see('LECTURE STYLE CLASS')
            ->see('TEACHING & LEARNING — MODULE MSE CLUSTER')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_teaching_and_learning_ie_page()
    {
        $this->visit('/lecture-style-class/teaching-and-learning/interactions-and-energy-module')
            ->see('LECTURE STYLE CLASS')
            ->see('TEACHING & LEARNING — MODULE IE CLUSTER')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_teaching_and_learning_if_page()
    {
        $this->visit('/lecture-style-class/teaching-and-learning/interactions-and-forces-module')
            ->see('LECTURE STYLE CLASS')
            ->see('TEACHING & LEARNING — MODULE IF CLUSTER')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_teaching_and_learning_wsl_page()
    {
        $this->visit('/lecture-style-class/teaching-and-learning/waves-sound-and-light-module')
            ->see('LECTURE STYLE CLASS')
            ->see('TEACHING & LEARNING — MODULE WSL CLUSTER')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_see_the_teaching_and_learning_mi_page()
    {
        $this->visit('/lecture-style-class/teaching-and-learning/matter-and-interactions-module')
            ->see('LECTURE STYLE CLASS')
            ->see('TEACHING & LEARNING — MODULE MI CLUSTER')
            ->assertResponseStatus(200);
    }
}
