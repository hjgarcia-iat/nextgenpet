<?php

namespace Tests\Feature\Authentication;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Factories\UserFactory;

/**
 * Class StoreLoginFormTest
 * @package Tests\Feature\Authentication
 */
class StoreLoginFormTest extends TestCase
{
    use RefreshDatabase;

    public function test_we_can_login_as_a_next_gen_pet_user()
    {
        $user     = UserFactory::createUser($this->valid_data());
        $response = $this->from(route('login.create'))->post(route('login.store'), $this->valid_data());

        $response->assertStatus(302);
        $response->assertRedirect('/');
        $this->assertTrue(auth()->check());
        $this->assertEquals(auth()->user()->id, $user->id);
    }

    public function test_we_cannot_login_if_the_account_is_pending()
    {
        UserFactory::createUser($this->valid_data(['account_status' => 'Pending']));

        $response = $this->from(route('login.create'))->post(route('login.store'), $this->valid_data());

        $response->assertStatus(302);
        $response->assertRedirect('/login');
        $this->assertFalse(auth()->check());
    }

    public function test_the_email_field_is_required()
    {
        $response = $this->from(route('login.create'))->post(route('login.store'), $this->valid_data(['email' => '']));

        $response->assertStatus(302);
        $response->assertSessionHasErrors('email');
        $response->assertRedirect(route('login.create'));
        $this->assertFalse(auth()->check());
    }

    public function test_the_password_field_is_required()
    {
        $response = $this->from(route('login.create'))->post(route('login.store'), $this->valid_data(['password' => '']));

        $response->assertStatus(302);
        $response->assertSessionHasErrors('password');
        $response->assertRedirect(route('login.create'));
        $this->assertFalse(auth()->check());
    }


    /**
     * Return valid form data
     * @param array $data
     * @return array
     */
    private function valid_data($data = [])
    {
        return array_merge([
            'email'    => 'jdoe@email.com',
            'password' => 'password',
        ], $data);
    }

}