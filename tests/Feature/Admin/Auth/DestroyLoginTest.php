<?php

namespace Tests\Feature\Admin\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Factories\UserFactory;
use Tests\TestCase;

class StoreLoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_we_can_logout()
    {
        $user     = UserFactory::createAdminUser();
        $response = $this->from(route('login.create'))->post(route('login.destroy'));


        $response->assertStatus(302);
        $response->assertRedirect('/login');
        $this->assertFalse(auth()->check());
    }
}