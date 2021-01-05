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
class ViewAccountEditPageTest extends TestCase
{
    use DatabaseTransactions, DatabaseMigrations;

    public function test_we_can_see_the_account_page_as_a_next_gen_pet_user()
    {
        $response = $this->actingAs(UserFactory::createUser())
            ->get(route('my-account'));

        $response->assertStatus(200);
    }

    public function test_we_cannot_see_the_account_page_if_we_are_not_logged_in()
    {
        $response = $this->get(route('my-account'));

        $response->assertStatus(302);
        $response->assertRedirect(route('login.create'));
    }
}