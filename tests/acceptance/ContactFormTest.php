<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Spinen\MailAssertions\MailTracking;

/**
 * Class ContactFormTest
 */
class ContactFormTest extends TestCase
{
    use DatabaseTransactions, MailTracking;

    /**
     * @test
     */
    public function we_send_the_contact_form()
    {
        $this->post(route('help.post'), [
            'name'    => 'Full Name',
            'email'   => 'email@email.com',
            'subject' => 'subject',
            'comment' => 'This is a comment on the email',
        ])->seeEmailWasSent()
            ->seeEmailContains('Full Name')
            ->seeEmailContains('email@email.com')
            ->seeEmailContains('subject')
            ->seeEmailContains('This is a comment on the email');
    }
}
