<?php

namespace Tests\Feature\Authentication;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Factories\UserFactory;
use Tests\TestCase;


/**
 * Class ViewLoginFormTest
 * @package Tests\Feature\Authentication
 */
class ViewLoginFormTest extends TestCase
{
    use RefreshDatabase;

    public function test_we_can_view_the_login_form_page()
    {
        $this->get(route('login.create'))->assertStatus(200);
    }

    public function test_we_cannot_view_the_login_form_page_if_we_are_logged_in()
    {
        $user = UserFactory::createUser();

        $this->from('/')
            ->actingAs($user)
            ->get(route('login.create'))
            ->assertStatus(302)
            ->assertRedirect('/');
    }
}