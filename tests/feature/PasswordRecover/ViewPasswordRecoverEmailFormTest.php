<?php

namespace Tests\Feature\PasswordRecover;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

/**
 * Class ViewPasswordRecoverEmailFormTest
 * @package Tests\Feature\PasswordRecover
 */
class ViewPasswordRecoverEmailFormTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    public function test_we_can_see_the_recover_password_email_form()
    {
        $this->get(route('password.create'))->assertResponseStatus(200);
    }

    public function test_we_cannot_see_the_recover_password_email_form_if_we_are_logged_in()
    {
        $user = \UserFactory::createNextGenPetUser();

        $this->actingAs($user)
            ->get(route('password.create'))
            ->assertResponseStatus(302)
            ->assertRedirectedTo('/');
    }
}