<?php

namespace Tests\Feature\StudioStyle;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Factories\UserFactory;
use Tests\TestCase;

/**
 * Class InstructorPCIPageTest
 * @package Tests\StudioStyle
 */
class InstructorPCIPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_we_can_see_the_instructor_mse_page_as_a_next_gen_pet_user()
    {
        $user = UserFactory::createNextGenPetUser();

        $this->actingAs($user)
            ->get('/studio-style-class/instructor/teaching-and-learning')
            ->assertStatus(200);
    }

    public function test_we_can_see_the_instructor_mse_page_as_an_admin_user()
    {
        $user = UserFactory::createAdminUser();

        $this->actingAs($user)
            ->get('/studio-style-class/instructor/teaching-and-learning')
            ->assertStatus(200);
    }

    public function test_we_can_see_the_instructor_mse_page_as_a_super_admin_user()
    {
        $user = UserFactory::createSuperAdminUser();

        $this->actingAs($user)
            ->get('/studio-style-class/instructor/teaching-and-learning')
            ->assertStatus(200);
    }

    public function test_we_cannot_see_the_instructor_mse_page_as_a_general_user()
    {
        $user = UserFactory::createGeneralUser();

        $this->actingAs($user)
            ->get('/studio-style-class/instructor/teaching-and-learning')
            ->assertStatus(302)
            ->assertRedirect(route('login.create'));
    }

    public function test_we_cannot_see_the_instructor_mse_page_if_we_are_not_logged_in()
    {
        $this->get('/studio-style-class/instructor/teaching-and-learning')
            ->assertStatus(302)
            ->assertRedirect(route('login.create'));
    }
}