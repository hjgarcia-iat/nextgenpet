<?php

namespace Tests\Feature\Register;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Factories\UserFactory;
use Tests\TestCase;

/**
 * Class ViewRegistrationFormTest
 * @package Tests\Feature\Register
 */
class ViewRegistrationFormTest extends TestCase
{
    use RefreshDatabase;

    public function test_we_can_view_the_registration_form()
    {
        $this->get(route('register.create'))->assertStatus(200);
    }

    public function test_we_cannot_view_the_registration_form_if_we_are_logged_in()
    {
        $user = UserFactory::createNextGenPetUser();

        $this->from('/')
            ->actingAs($user)
            ->get(route('register.create'))
            ->assertStatus(302)
            ->assertRedirect('/');
    }
}