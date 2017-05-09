<?php

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Spinen\MailAssertions\MailTracking;

/**
 * Class RecoverPasswordTest
 */
class RecoverPasswordTest extends TestCase
{
    use DatabaseTransactions, MailTracking;

    /**
     * @test
     */
    public function we_can_see_the_recover_password_form()
    {
        $this->visit(route('password.create'))
            ->assertResponseStatus(200)
            ->see('Recover Your Password');
    }

    /**
     * @test
     */
    public function we_can_view_the_recover_password_form()
    {
        Notification::fake();
        $user = $this->createNextGenPetUser();

        $response = $this->post(route('password.store'), ['reset_email' => $user->email]);
        $response->assertRedirectedTo(route('login.create'));

        $token = '';
        Notification::assertSentTo(
            $user,
            ResetPassword::class,
            function ($notification, $channels) use (&$token) {
                $token = $notification->token;

                return true;
            });

        $this->visit(route('recover.password.edit', $token))
            ->assertResponseStatus(200)
            ->see('Recover Password');
    }

    /**
     * @test
     */
    public function we_cant_get_to_the_form_with_empty_token_or_incorrect_token()
    {
        $token = '';
        $this->get(route('recover.password.edit', $token))
            ->assertResponseStatus(404);

        $token = 'token';
        $this->get(route('recover.password.edit', $token))
            ->assertRedirectedTo(route('login.create'));
    }

    /**
     * @test
     */
    public function we_reset_a_password()
    {
        Notification::fake();
        $user = $this->createNextGenPetUser();

        $response = $this->post(route('password.store'), ['reset_email' => $user->email]);
        $response->assertRedirectedTo(route('login.create'));

        $token = '';
        Notification::assertSentTo(
            $user,
            ResetPassword::class,
            function ($notification, $channels) use (&$token) {
                $token = $notification->token;

                return true;
            });


        $this->post(route('recover.password.update'), [
            'email'                 => $user->email,
            'token'                 => $token,
            'password'              => '87538753',
            'password_confirmation' => '87538753',
        ])
            ->assertRedirectedTo('/');
    }

}