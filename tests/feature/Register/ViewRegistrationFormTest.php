<?php

namespace Tests\Feature\Register;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\Traits\TestHelperTrait;

/**
 * Class ViewRegistrationFormTest
 * @package Tests\Feature\Register
 */
class ViewRegistrationFormTest extends TestCase
{
    use DatabaseTransactions, DatabaseMigrations, TestHelperTrait;

    public function test_we_can_view_registration_form()
    {
        $this->visit(route('register.create'))->assertResponseStatus(200);
    }

    public function test_we_cannot_view_registration_form_if_we_are_logged_in()
    {
        $user = \UserFactory::createNextGenPetUser();

        $this->from('/')
            ->actingAs($user)
            ->visit(route('register.create'))
            ->seePageIs('/');
    }
}