<?php

namespace Tests\Feature\Account;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\Factories\UserFactory;

/**
 * Class ViewAccountEditPage
 * @package Tests\Feature\Account
 */
class ViewAccountEditPage extends TestCase
{
    use DatabaseTransactions, DatabaseMigrations;

    public function test_we_can_see_the_account_page_as_a_next_gen_pet_user()
    {
        $response = $this->actingAs(UserFactory::createNextGenPetUser())
            ->get(route('my-account'));

        $response->assertStatus(200);
    }

    public function test_we_cannot_see_the_account_page_as_an_admin_user()
    {
        $response = $this->actingAs(UserFactory::createAdminUser())
            ->get(route('my-account'));

        $response->assertStatus(404);
    }

    public function test_we_cannot_see_the_account_page_as_a_super_admin_user()
    {
        $response = $this->actingAs(UserFactory::createSuperAdminUser())
            ->get(route('my-account'));

        $response->assertStatus(404);
    }

    public function test_we_cannot_see_the_account_page_as_a_general_user()
    {
        $response = $this->actingAs(UserFactory::createGeneralUser())
            ->get(route('my-account'));

        $response->assertStatus(404);
    }

    public function test_we_cannot_see_the_account_page_if_we_are_not_logged_in()
    {
        $response = $this->get(route('my-account'));

        $response->assertStatus(302);
        $response->assertRedirect(route('login.create'));
    }
}