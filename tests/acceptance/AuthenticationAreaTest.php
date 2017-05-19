<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class AuthenticationAreaTest
 */
class AuthenticationAreaTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @test
     */
    public function we_can_see_the_login_page()
    {
        $this->visit(route('login.create'))
            ->see('Login')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_cannot_login_if_dont_have_the_correct_role()
    {
        $user = $this->createGenericUser(['password' => 'password']);

        $this->visit(route('login.create'))
            ->submitForm('Login', ['email' => $user->email, 'password' => 'password'])
            ->seePageIs(route('login.create'))
            ->see('You don\'t have access to this area.');
    }

    /**
     * @test
     */
    public function we_can_login()
    {
        $user = $this->createNextGenPetUser(['password' => 'password']);

        $this->visit(route('login.create'))
            ->submitForm('Login', ['email' => $user->email, 'password' => 'password'])
            ->see('You have been logged in')
            ->see('Jane Doe');
    }

    /**
     * @test
     */
    public function we_can_logout()
    {
        $user = $this->createNextGenPetUser(['password' => 'password']);

        $this->actingAs($user)
            ->post(route('login.destroy'))
            ->assertRedirectedTo(route('login.create'));
    }
}