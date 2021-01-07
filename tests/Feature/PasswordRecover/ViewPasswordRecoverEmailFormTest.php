<?php

namespace Tests\Feature\PasswordRecover;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Factories\UserFactory;
use Tests\TestCase;

/**
 * Class ViewPasswordRecoverEmailFormTest
 * @package Tests\Feature\PasswordRecover
 */
class ViewPasswordRecoverEmailFormTest extends TestCase
{
    use RefreshDatabase;

    public function test_we_can_see_the_recover_password_email_form()
    {
        $this->get(route('password.create'))->assertStatus(200);
    }

    public function test_we_cannot_see_the_recover_password_email_form_if_we_are_logged_in()
    {
        $user = UserFactory::createUser();

        $this->actingAs($user)
            ->get(route('password.create'))
            ->assertStatus(302)
            ->assertRedirect('/');
    }
}