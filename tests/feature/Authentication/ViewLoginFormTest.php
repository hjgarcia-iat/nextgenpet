<?php

namespace Tests\Feature\Authentication;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\Traits\TestHelperTrait;

/**
 * Class ViewLoginFormTest
 * @package Tests\Feature\Authentication
 */
class ViewLoginFormTest extends TestCase
{
    use DatabaseTransactions, DatabaseMigrations, TestHelperTrait;

    public function test_we_can_view_the_login_form_page()
    {
        $this->get(route('login.create'))->assertStatus(200);
    }

    public function test_we_cannot_view_the_login_form_page_if_we_are_logged_in()
    {
        $user = \UserFactory::createNextGenPetUser();

        $this->from('/')
            ->actingAs($user)
            ->get(route('login.create'))
            ->assertStatus(302)
            ->assertRedirect('/');
    }
}