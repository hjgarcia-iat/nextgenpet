<?php

namespace Tests\Feature\PasswordRecover;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Password;
use Tests\TestCase;
use Tests\Traits\TestHelperTrait;

/**
 * Class ViewPasswordEditFormTest
 * @package Tests\Feature\PasswordRecover
 */
class ViewPasswordEditFormTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions, TestHelperTrait;

    public function test_we_can_view_password_edit_form_page()
    {
        $user  = \UserFactory::createNextGenPetUser();
        $token = Password::broker()->createToken($user);

        $response = $this->get(route('recover.password.edit', [$user->email, $token]));

        $response->assertStatus(200);
    }

    public function test_we_cannot_view_password_edit_form_page_if_the_token_is_missing()
    {
        $response = $this->get('password/reset');

        $response->assertStatus(404);
    }

    public function test_we_cannot_view_password_edit_form_page_if_the_token_is_incorrect()
    {
        $user  = \UserFactory::createNextGenPetUser();

        $response = $this->get(route('recover.password.edit', [$user->email, 'invalid-token']));

        $response->assertStatus(302);
    }

    public function test_we_cannot_view_password_edit_form_page_as_an_admin()
    {
        $user  = \UserFactory::createAdminUser();
        $token = Password::broker()->createToken($user);

        $response = $this->get(route('recover.password.edit', [$user->email, $token]));


        $response->assertStatus(404);
    }

    public function test_we_cannot_view_password_edit_form_page_as_a_super_admin()
    {
        $user  = \UserFactory::createSuperAdminUser();
        $token = Password::broker()->createToken($user);

        $response = $this->get(route('recover.password.edit', [$user->email, $token]));

        $response->assertStatus(404);
    }
}