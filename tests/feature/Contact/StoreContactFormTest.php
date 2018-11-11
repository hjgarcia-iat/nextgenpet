<?php

namespace Tests\Feature\Contact;

use Spinen\MailAssertions\MailTracking;
use Tests\TestCase;

/**
 * Class StoreContactFormTest
 * @package Tests\Feature\Contact
 */
class StoreContactFormTest extends TestCase
{
    use MailTracking;

    public function test_we_can_send_the_contact_form()
    {
        $response = $this->post(route('help.post'), $this->valid_data());

        $response->assertStatus(302);
        $this->seeEmailWasSent();
        $this->seeEmailTo(env('SUPPORT_EMAIL'));
        $this->seeEmailContains($this->valid_data()['name']);
        $this->seeEmailContains($this->valid_data()['email']);
        $this->seeEmailContains($this->valid_data()['subject']);
        $this->seeEmailContains($this->valid_data()['comment']);
    }

    public function test_the_name_field_is_required()
    {
        $response = $this->post(route('help.post'), $this->valid_data(['name' => '']));

        $response->assertStatus(302);
        $this->seeEmailWasNotSent();
        $response->assertSessionHasErrors('name');
    }

    public function test_the_email_field_is_required()
    {
        $response = $this->post(route('help.post'), $this->valid_data(['email' => '']));

        $response->assertStatus(302);
        $this->seeEmailWasNotSent();
        $response->assertSessionHasErrors('email');
    }

    public function test_the_email_field_is_valid()
    {
        $response = $this->post(route('help.post'), $this->valid_data(['email' => 'invalid-email']));

        $response->assertStatus(302);
        $this->seeEmailWasNotSent();
        $response->assertSessionHasErrors('email');
    }

    public function test_the_subject_field_is_required()
    {
        $response = $this->post(route('help.post'), $this->valid_data(['subject' => '']));

        $response->assertStatus(302);
        $this->seeEmailWasNotSent();
        $response->assertSessionHasErrors('subject');
    }

    public function test_the_comment_field_is_required()
    {
        $response = $this->post(route('help.post'), $this->valid_data(['comment' => '']));

        $response->assertStatus(302);
        $this->seeEmailWasNotSent();
        $response->assertSessionHasErrors('comment');
    }

    /**
     * Valid form data
     *
     * @param array $data
     * @return array
     */
    private function valid_data($data = [])
    {
        return array_merge([
            'name'    => 'John Doe',
            'email'   => 'jdoe@email.com',
            'subject' => 'Some Subject',
            'comment' => 'Some Message',
        ], $data);
    }
}