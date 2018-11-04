<?php

namespace Tests\Feature\Authentication;

use Tests\TestCase;
use Tests\Traits\TestHelperTrait;

/**
 * Class StoreLoginFormTest
 * @package Tests\Feature\Authentication
 */
class StoreLoginFormTest extends TestCase
{
    use TestHelperTrait;



    public function test_email_field_is_required()
    {
        $response =  $this->from(route('login.create'))->post(route('login.store'), $this->valid_data(['email' => '']));

        $response->assertResponseStatus(302);
        $response->assertSessionHasErrors('email');
        $response->assertRedirectedToRoute('login.create');
        $this->assertFalse(auth()->check());
    }

    public function test_password_field_is_required()
    {
        $response =  $this->from(route('login.create'))->post(route('login.store'), $this->valid_data(['password' => '']));

        $response->assertResponseStatus(302);
        $response->assertSessionHasErrors('password');
        $response->assertRedirectedToRoute('login.create');
        $this->assertFalse(auth()->check());
    }


    /**
     * Return valid form data
     * @param array $data
     * @return array
     */
    private function valid_data($data = [])
    {
        return array_merge([
            'email'    => 'jdoe@email.com',
            'password' => 'password',
        ], $data);
    }

}