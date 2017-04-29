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
}