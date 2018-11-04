<?php

namespace Tests\Feature\Register;

use App\Zip;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\Traits\TestHelperTrait;

/**
 * Class StoreRegistrationTest
 * @package Tests\Feature\Register
 */
class StoreRegistrationTest extends TestCase
{
    use DatabaseTransactions, DatabaseMigrations, TestHelperTrait;

    /**
     * Zip
     *
     * @var \App\Zip;
     */
    protected $zip;

    public function setUp()
    {
        parent::setUp();

        $this->zip = factory(Zip::class)->create(['zip_code' => 00000]);
    }

    public function test_the_first_name_field_is_required()
    {
        $response = $this->from(route('register.create'))
            ->post(route('register.store'), $this->valid_data(['first_name' => '']));

        $response->assertResponseStatus(302);
        $response->assertSessionHasErrors('first_name');
        $response->assertRedirectedTo(route('register.create'));
        $response->dontSeeInDatabase('users', ['email' => $this->valid_data()['register_email']]);
        $response->dontSeeInDatabase('colleges', ['name' => $this->valid_data()['institution']]);
        $response->dontSeeInDatabase('accounts', [
            'first_name' => $this->valid_data()['first_name'],
            'last_name'  => $this->valid_data()['last_name'],
        ]);
    }

    public function test_the_last_name_field_is_required()
    {
        $response = $this->from(route('register.create'))
            ->post(route('register.store'), $this->valid_data(['last_name' => '']));

        $response->assertResponseStatus(302);
        $response->assertSessionHasErrors('last_name');
        $response->assertRedirectedTo(route('register.create'));
        $response->dontSeeInDatabase('users', ['email' => $this->valid_data()['register_email']]);
        $response->dontSeeInDatabase('colleges', ['name' => $this->valid_data()['institution']]);
        $response->dontSeeInDatabase('accounts', [
            'first_name' => $this->valid_data()['first_name'],
            'last_name'  => $this->valid_data()['last_name'],
        ]);
    }

    public function test_the_email_field_is_required()
    {
        $response = $this->from(route('register.create'))
            ->post(route('register.store'), $this->valid_data(['register_email' => '']));

        $response->assertResponseStatus(302);
        $response->assertSessionHasErrors('register_email');
        $response->assertRedirectedTo(route('register.create'));
        $response->dontSeeInDatabase('users', ['email' => $this->valid_data()['register_email']]);
        $response->dontSeeInDatabase('colleges', ['name' => $this->valid_data()['institution']]);
        $response->dontSeeInDatabase('accounts', [
            'first_name' => $this->valid_data()['first_name'],
            'last_name'  => $this->valid_data()['last_name'],
        ]);
    }

    public function test_the_email_field_is_invalid()
    {
        $response = $this->from(route('register.create'))
            ->post(route('register.store'), $this->valid_data(['register_email' => 'invalid-email']));

        $response->assertResponseStatus(302);
        $response->assertSessionHasErrors('register_email');
        $response->assertRedirectedTo(route('register.create'));
        $response->dontSeeInDatabase('users', ['email' => $this->valid_data()['register_email']]);
        $response->dontSeeInDatabase('colleges', ['name' => $this->valid_data()['institution']]);
        $response->dontSeeInDatabase('accounts', [
            'first_name' => $this->valid_data()['first_name'],
            'last_name'  => $this->valid_data()['last_name'],
        ]);
    }

    public function test_the_email_field_is_unique()
    {
        \UserFactory::createGeneralUser(['email' => 'taken-email@email.com']);
        $response = $this->from(route('register.create'))
            ->post(route('register.store'), $this->valid_data(['register_email' => 'taken-email@email.com']));

        $response->assertResponseStatus(302);
        $response->assertSessionHasErrors('register_email');
        $response->assertRedirectedTo(route('register.create'));
        $response->dontSeeInDatabase('users', ['email' => $this->valid_data()['register_email']]);
        $response->dontSeeInDatabase('colleges', ['name' => $this->valid_data()['institution']]);
        $response->dontSeeInDatabase('accounts', [
            'first_name' => $this->valid_data()['first_name'],
            'last_name'  => $this->valid_data()['last_name'],
        ]);
    }

    public function test_the_institution_field_is_required()
    {
        $response = $this->from(route('register.create'))
            ->post(route('register.store'), $this->valid_data(['institution' => '']));

        $response->assertResponseStatus(302);
        $response->assertSessionHasErrors('institution');
        $response->assertRedirectedTo(route('register.create'));
        $response->dontSeeInDatabase('users', ['email' => $this->valid_data()['register_email']]);
        $response->dontSeeInDatabase('colleges', ['name' => $this->valid_data()['institution']]);
        $response->dontSeeInDatabase('accounts', [
            'first_name' => $this->valid_data()['first_name'],
            'last_name'  => $this->valid_data()['last_name'],
        ]);
    }

    public function test_the_zip_field_is_required()
    {
        $response = $this->from(route('register.create'))
            ->post(route('register.store'), $this->valid_data(['zip' => '']));

        $response->assertResponseStatus(302);
        $response->assertSessionHasErrors('zip');
        $response->assertRedirectedTo(route('register.create'));
        $response->dontSeeInDatabase('users', ['email' => $this->valid_data()['register_email']]);
        $response->dontSeeInDatabase('colleges', ['name' => $this->valid_data()['institution']]);
        $response->dontSeeInDatabase('accounts', [
            'first_name' => $this->valid_data()['first_name'],
            'last_name'  => $this->valid_data()['last_name'],
        ]);
    }

    public function test_the_zip_field_is_at_least_five_characters()
    {
        $response = $this->from(route('register.create'))
            ->post(route('register.store'), $this->valid_data(['zip' => '0000']));

        $response->assertResponseStatus(302);
        $response->assertSessionHasErrors('zip');
        $response->assertRedirectedTo(route('register.create'));
        $response->dontSeeInDatabase('users', ['email' => $this->valid_data()['register_email']]);
        $response->dontSeeInDatabase('colleges', ['name' => $this->valid_data()['institution']]);
        $response->dontSeeInDatabase('accounts', [
            'first_name' => $this->valid_data()['first_name'],
            'last_name'  => $this->valid_data()['last_name'],
        ]);
    }

    public function test_the_zip_field_exists()
    {
        $response = $this->from(route('register.create'))
            ->post(route('register.store'), $this->valid_data(['zip' => 'non-existent-zip']));

        $response->assertResponseStatus(302);
        $response->assertSessionHasErrors('zip');
        $response->assertRedirectedTo(route('register.create'));
        $response->dontSeeInDatabase('users', ['email' => $this->valid_data()['register_email']]);
        $response->dontSeeInDatabase('colleges', ['name' => $this->valid_data()['institution']]);
        $response->dontSeeInDatabase('accounts', [
            'first_name' => $this->valid_data()['first_name'],
            'last_name'  => $this->valid_data()['last_name'],
        ]);
    }

    private function valid_data($data = [])
    {
        return array_merge([
            'first_name'     => 'John',
            'last_name'      => 'Doe',
            'register_email' => 'jdoe@email.com',
            'institution'    => 'College',
            'zip'            => '00000',
        ], $data);
    }
}