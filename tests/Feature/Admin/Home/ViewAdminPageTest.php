<?php

namespace Tests\Feature\Admin\Home;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Factories\UserFactory;
use Tests\TestCase;

class ViewAdminPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_we_can_see_admin_view_as_an_admin()
    {
        $user = UserFactory::createAdminUser();

        $response = $this->actingAs($user)->get(\route('admin.index'));

        $response->assertStatus(200);
    }

    public function test_we_cannot_log_in_as_a_general_user()
    {
        $user = UserFactory::createGeneralUser();

        $response = $this->actingAs($user)->get(\route('admin.index'));

        $response->assertRedirect('/');
    }

    public function test_we_need_to_be_logged_in()
    {
        $response = $this->get(\route('admin.index'));

        $response->assertRedirect('/login');
    }
}