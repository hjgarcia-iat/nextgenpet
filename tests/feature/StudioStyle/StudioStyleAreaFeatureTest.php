<?php

namespace Tests\Feature\StudioStyle;

use Tests\TestCase;

/**
 * Class StudioStyleAreaFeatureTest
 * @package Tests\Feature\StudioStyle
 */
class StudioStyleAreaFeatureTest extends TestCase
{
    public function test_we_can_see_the_studio_style_home_page()
    {
        $this->get('/studio-style-class')->assertStatus(200);
    }

    public function test_we_can_see_the_studio_style_pedagogy_page()
    {
        $this->get('/studio-style-class/pedagogy')->assertStatus(200);
    }

    public function test_we_can_see_the_studio_style_table_of_contents_page()
    {
        $this->get('/studio-style-class/table-of-contents')->assertStatus(200);
    }

    public function test_we_can_see_the_studio_style_content_mse_page()
    {
        $this->get('/studio-style-class/content/magnetism-and-static-electricity-module')->assertStatus(200);
    }

    public function test_we_can_see_the_studio_style_content_ie_page()
    {
        $this->get('/studio-style-class/content/interactions-and-energy-module')->assertStatus(200);
    }

    public function test_we_can_see_the_studio_style_content_if_page()
    {
        $this->get('/studio-style-class/content/interactions-and-forces-module')->assertStatus(200);
    }

    public function test_we_can_see_the_studio_style_content_wsl_page()
    {
        $this->get('/studio-style-class/content/waves-sound-and-light-module')->assertStatus(200);
    }

    public function test_we_can_see_the_studio_style_content_mi_page()
    {
        $this->get('/studio-style-class/content/matter-and-interactions-module')->assertStatus(200);
    }

    public function test_we_can_see_the_studio_style_teacher_and_learning_toc_page()
    {
        $this->get('/studio-style-class/teaching-and-learning/table-of-contents')->assertStatus(200);
    }

    public function test_we_can_see_the_studio_style_teacher_and_learning_general_lessons_page()
    {
        $this->get('/studio-style-class/teaching-and-learning/table-of-contents')->assertStatus(200);
    }

    public function test_we_can_see_the_studio_style_teacher_and_learning_mse_page()
    {
        $this->get('/studio-style-class/teaching-and-learning/magnetism-and-static-electricity-module')->assertStatus(200);
    }

    public function test_we_can_see_the_studio_style_teacher_and_learning_ie_page()
    {
        $this->get('/studio-style-class/teaching-and-learning/interactions-and-energy-module')->assertStatus(200);
    }

    public function test_we_can_see_the_studio_style_teacher_and_learning_if_page()
    {
        $this->get('/studio-style-class/teaching-and-learning/interactions-and-forces-module')->assertStatus(200);
    }

    public function test_we_can_see_the_studio_style_teacher_and_learning_wsl_page()
    {
        $this->get('/studio-style-class/teaching-and-learning/waves-sound-and-light-module')->assertStatus(200);
    }

    public function test_we_can_see_the_studio_style_teacher_and_learning_mi_page()
    {
        $this->get('/studio-style-class/teaching-and-learning/matter-and-interactions-module')->assertStatus(200);
    }

    public function test_we_can_see_the_studio_style_planning_your_course_page()
    {
        $this->get('/studio-style-class/planning-your-course')->assertStatus(200);
    }

    public function test_we_can_see_the_studio_style_extension_index_page()
    {
        $this->get('/studio-style-class/extension-index')->assertStatus(200);
    }

    public function test_we_can_see_the_studio_style_demo_movies_and_sims_page()
    {
        $this->get('/studio-style-class/demonstration-movies-and-simulations')->assertStatus(200);
    }

    public function test_we_can_see_the_studio_style_classroom_movies_page()
    {
        $this->get('/studio-style-class/demonstration-movies-and-simulations')->assertStatus(200);
    }

    public function test_we_can_see_the_pci_table_of_contents_page()
    {
        $this->get('/studio-style-class/pci-table-of-contents')->assertStatus(200);
    }
}