<?php

namespace Tests\Feature;

use Spinen\MailAssertions\MailTracking;
use TestCase;

/**
 * Class StoreContactFormTest
 * @package Tests\Feature
 */
class StoreContactFormTest extends TestCase
{
    use MailTracking;

    public function test_we_can_send_contact_form()
    {
        $response = $this->post(route('help.post'), $this->valid_data());

        $response->assertResponseStatus(302);
        $this->seeEmailWasSent();
        $this->seeEmailTo(env('SUPPORT_EMAIL'));
        $this->seeEmailContains($this->valid_data()['name']);
        $this->seeEmailContains($this->valid_data()['email']);
        $this->seeEmailContains($this->valid_data()['subject']);
        $this->seeEmailContains($this->valid_data()['comment']);
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