<?php

namespace Tests\feature\Account;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Factories\UserFactory;

/**
 * Class UpdateAccountPageTest
 * @package Tests\Feature\Account
 */
class UpdateAccountPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_we_can_update_the_account_as_next_gen_pet_user()
    {
        $user = UserFactory::createNextGenPetUser();

        $response = $this->actingAs($user)
            ->from(route('my-account'))
            ->post(route('my-account-update'), $this->valid_data());

        $response->assertStatus(302);
        $response->assertRedirect(route('my-account'));
        tap($user->fresh(), function ($user) {
            $this->assertEquals($this->valid_data()['first_name'], $user->account->first_name);
            $this->assertEquals($this->valid_data()['last_name'], $user->account->last_name);
            $this->assertEquals($this->valid_data()['email'], $user->email);
            $this->assertTrue(\Hash::check($this->valid_data()['password'], $user->password));
        });
    }

    public function test_we_cannot_update_the_account_as_an_admin_user()
    {
        $user = UserFactory::createAdminUser();

        $response = $this->actingAs($user)
            ->from(route('my-account'))
            ->post(route('my-account-update'), $this->valid_data());

        $response->assertStatus(404);
    }

    public function test_we_cannot_update_the_account_as_a_super_admin_user()
    {
        $user = UserFactory::createSuperAdminUser();

        $response = $this->actingAs($user)
            ->from(route('my-account'))
            ->post(route('my-account-update'), $this->valid_data());

        $response->assertStatus(404);
    }

    public function test_we_cannot_update_the_account_as_a_general_user()
    {
        $user = UserFactory::createSuperAdminUser();

        $response = $this->actingAs($user)
            ->from(route('my-account'))
            ->post(route('my-account-update'), $this->valid_data());

        $response->assertStatus(404);
    }

    public function test_we_cannot_update_the_account_if_we_are_not_logged_in()
    {
        UserFactory::createNextGenPetUser();

        $response = $this->post(route('my-account-update'), $this->valid_data());

        $response->assertStatus(302);
        $response->assertRedirect(route('login.create'));
    }

    public function test_first_name_field_is_required()
    {
        $user = UserFactory::createNextGenPetUser();

        $response = $this->actingAs($user)
            ->from(route('my-account'))
            ->post(route('my-account-update'), $this->valid_data(['first_name' => '']));

        $response->assertStatus(302);
        $response->assertSessionHasErrors('first_name');
        $response->assertRedirect(route('my-account'));
        tap($user->fresh(), function ($user) {
            $this->assertNotEquals($this->valid_data()['first_name'], $user->account->first_name);
            $this->assertNotEquals($this->valid_data()['last_name'], $user->account->last_name);
            $this->assertNotEquals($this->valid_data()['email'], $user->email);
            $this->assertFalse(\Hash::check($this->valid_data()['password'], $user->password));
        });
    }

    public function test_last_name_field_is_required()
    {
        $user = UserFactory::createNextGenPetUser();

        $response = $this->actingAs($user)
            ->from(route('my-account'))
            ->post(route('my-account-update'), $this->valid_data(['last_name' => '']));

        $response->assertStatus(302);
        $response->assertSessionHasErrors('last_name');
        $response->assertRedirect(route('my-account'));
        tap($user->fresh(), function ($user) {
            $this->assertNotEquals($this->valid_data()['first_name'], $user->account->first_name);
            $this->assertNotEquals($this->valid_data()['last_name'], $user->account->last_name);
            $this->assertNotEquals($this->valid_data()['email'], $user->email);
            $this->assertFalse(\Hash::check($this->valid_data()['password'], $user->password));
        });
    }

    public function test_email_field_is_required()
    {
        $user = UserFactory::createNextGenPetUser();

        $response = $this->actingAs($user)
            ->from(route('my-account'))
            ->post(route('my-account-update'), $this->valid_data(['email' => '']));

        $response->assertStatus(302);
        $response->assertSessionHasErrors('email');
        $response->assertRedirect(route('my-account'));
        tap($user->fresh(), function ($user) {
            $this->assertNotEquals($this->valid_data()['first_name'], $user->account->first_name);
            $this->assertNotEquals($this->valid_data()['last_name'], $user->account->last_name);
            $this->assertNotEquals($this->valid_data()['email'], $user->email);
            $this->assertFalse(\Hash::check($this->valid_data()['password'], $user->password));
        });
    }

    public function test_email_field_is_valid()
    {
        $user = UserFactory::createNextGenPetUser();

        $response = $this->actingAs($user)
            ->from(route('my-account'))
            ->post(route('my-account-update'), $this->valid_data(['email' => 'invalid-email']));

        $response->assertStatus(302);
        $response->assertSessionHasErrors('email');
        $response->assertRedirect(route('my-account'));
        tap($user->fresh(), function ($user) {
            $this->assertNotEquals($this->valid_data()['first_name'], $user->account->first_name);
            $this->assertNotEquals($this->valid_data()['last_name'], $user->account->last_name);
            $this->assertNotEquals($this->valid_data()['email'], $user->email);
            $this->assertFalse(\Hash::check($this->valid_data()['password'], $user->password));
        });
    }


    private function valid_data($data = [])
    {
        return array_merge([
            'first_name'            => 'Jane',
            'last_name'             => 'Doe',
            'email'                 => 'jdoe@email.com',
            'password'              => 'password',
            'password_confirmation' => 'password',
        ], $data);

    }
}