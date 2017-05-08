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

        dd($token);
//
//        $this->post('api/user/resetting', [
//            'email'                 => $user->email,
//            'token'                 => $token,
//            'password'              => '87538753',
//            'password_confirmation' => '87538753'
//        ])
//            ->assertResponseOk();
    }

}