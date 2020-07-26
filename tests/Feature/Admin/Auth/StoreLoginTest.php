<?php

namespace Tests\Feature\Admin\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Factories\UserFactory;
use Tests\TestCase;

class StoreLoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_we_can_login_as_an_admin()
    {
        $user     = UserFactory::createAdminUser($this->valid_data());
        $response = $this->from(route('login.create'))->post(route('login.store'), $this->valid_data());

        $response->assertStatus(302);
        $response->assertRedirect('/admin');
        $this->assertTrue(auth()->check());
        $this->assertEquals(auth()->user()->id, $user->id);
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