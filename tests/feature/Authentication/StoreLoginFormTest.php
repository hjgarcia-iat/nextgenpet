<?php

namespace Tests\Feature\Authentication;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\Traits\TestHelperTrait;

/**
 * Class StoreLoginFormTest
 * @package Tests\Feature\Authentication
 */
class StoreLoginFormTest extends TestCase
{
    use TestHelperTrait, DatabaseMigrations, DatabaseTransactions;

    public function test_we_can_login_as_a_next_gen_pet_user()
    {
        $user     = \UserFactory::createNextGenPetUser($this->valid_data());
        $response = $this->from(route('login.create'))->post(route('login.store'), $this->valid_data());

        $response->assertResponseStatus(302);
        $response->assertRedirectedTo('/');
        $this->assertTrue(auth()->check());
        $this->assertEquals(auth()->user()->id, $user->id);
    }

    public function test_we_can_login_as_an_admin()
    {
        $user     = \UserFactory::createAdminUser($this->valid_data());
        $response = $this->from(route('login.create'))->post(route('login.store'), $this->valid_data());

        $response->assertResponseStatus(302);
        $response->assertRedirectedTo('/');
        $this->assertTrue(auth()->check());
        $this->assertEquals(auth()->user()->id, $user->id);
    }

    public function test_we_can_login_as_an_super_admin()
    {
        $user     = \UserFactory::createSuperAdminUser($this->valid_data());
        $response = $this->from(route('login.create'))->post(route('login.store'), $this->valid_data());

        $response->assertResponseStatus(302);
        $response->assertRedirectedTo('/');
        $this->assertTrue(auth()->check());
        $this->assertEquals(auth()->user()->id, $user->id);
    }

    public function test_we_cannot_login_as_a_general_user()
    {
        \UserFactory::createGeneralUser($this->valid_data());
        $response = $this->from(route('login.create'))->post(route('login.store'), $this->valid_data());

        $response->assertResponseStatus(302);
        $response->assertRedirectedTo('/login');
        $this->assertFalse(auth()->check());
    }

    public function test_we_cannot_login_if_the_account_is_pending()
    {
        \UserFactory::createNextGenPetUser($this->valid_data(['account_status' => 'Pending']));

        $response = $this->from(route('login.create'))->post(route('login.store'), $this->valid_data());

        $response->assertResponseStatus(302);
        $response->assertRedirectedTo('/login');
        $this->assertFalse(auth()->check());
    }

    public function test_the_email_field_is_required()
    {
        $response = $this->from(route('login.create'))->post(route('login.store'), $this->valid_data(['email' => '']));

        $response->assertResponseStatus(302);
        $response->assertSessionHasErrors('email');
        $response->assertRedirectedToRoute('login.create');
        $this->assertFalse(auth()->check());
    }

    public function test_the_password_field_is_required()
    {
        $response = $this->from(route('login.create'))->post(route('login.store'), $this->valid_data(['password' => '']));

        $response->assertResponseStatus(302);
        $response->assertSessionHasErrors('password');
        $response->assertRedirectedToRoute('login.create');
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