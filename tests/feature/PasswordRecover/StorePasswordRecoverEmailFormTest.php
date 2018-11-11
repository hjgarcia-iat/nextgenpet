<?php

namespace Tests\Feature\PasswordRecover;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Spinen\MailAssertions\MailTracking;
use Tests\TestCase;
use Tests\Traits\TestHelperTrait;

/**
 * Class StorePasswordRecoverEmailFormTest
 * @package Tests\Feature\PasswordRecover
 */
class StorePasswordRecoverEmailFormTest extends TestCase
{
    use DatabaseTransactions, DatabaseMigrations, MailTracking, TestHelperTrait;

    public function test_a_next_gen_pet_user_can_request_a_password_reset_link()
    {
        \UserFactory::createNextGenPetUser(['email' => $this->valid_data()['reset_email']]);

        $response = $this->from(route('password.create'))
            ->post(route('password.store'), $this->valid_data(['reset_email' => $this->valid_data()['reset_email']]));

        $response->assertStatus(302);
        $response->assertRedirect(route('login.create'));
        $this->seeEmailWasSent();
    }

    public function test_the_email_field_is_required()
    {
        $response = $this->from(route('password.create'))
            ->post(route('password.store'), $this->valid_data(['reset_email' => '']));

        $response->assertStatus(302);
        $response->assertRedirect(route('password.create'));
        $response->assertSessionHasErrors('reset_email');
        $this->seeEmailWasNotSent();
    }

    public function test_the_email_field_is_valid()
    {
        $response = $this->from(route('password.create'))
            ->post(route('password.store'), $this->valid_data(['reset_email' => 'invalid-email']));

        $response->assertStatus(302);
        $response->assertRedirect(route('password.create'));
        $response->assertSessionHasErrors('reset_email');
        $this->seeEmailWasNotSent();
    }

    public function test_the_email_field_exists()
    {
        $response = $this->from(route('password.create'))
            ->post(route('password.store'), $this->valid_data(['reset_email' => 'non-existent-email@email.com']));

        $response->assertStatus(302);
        $response->assertRedirect(route('password.create'));
        $response->assertSessionHasErrors('reset_email');
        $this->seeEmailWasNotSent();
    }

    public function test_an_admin_user_cannot_request_a_reset_password_email()
    {
        \UserFactory::createAdminUser(['email' => 'admin@email.com']);

        $response = $this->from(route('password.create'))
            ->post(route('password.store'), $this->valid_data(['reset_email' => 'admin@email.com']));

        $response->assertStatus(302);
        $response->assertRedirect(route('password.create'));
        $this->seeEmailWasNotSent();
    }

    public function test_a_super_admin_user_cannot_request_a_reset_password_email()
    {
        \UserFactory::createSuperAdminUser(['email' => 'super-admin@email.com']);

        $response = $this->from(route('password.create'))
            ->post(route('password.store'), $this->valid_data(['reset_email' => 'super-admin@email.com']));

        $response->assertStatus(302);
        $response->assertRedirect(route('password.create'));
        $this->seeEmailWasNotSent();
    }

    public function test_a_general_user_cannot_request_a_reset_password_email()
    {
        \UserFactory::createGeneralUser(['email' => 'general-user@email.com']);

        $response = $this->from(route('password.create'))
            ->post(route('password.store'), $this->valid_data(['reset_email' => 'general-user@email.com']));

        $response->assertStatus(302);
        $response->assertRedirect(route('password.create'));
        $this->seeEmailWasNotSent();
    }

    /**
     * Valid Form Data
     *
     * @param array $data
     * @return array
     */
    private function valid_data($data = [])
    {
        return array_merge([
            'reset_email' => 'jdoe@email.com',
        ], $data);
    }
}