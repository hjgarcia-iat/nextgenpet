<?php

namespace Tests\Feature\Register;

use App\Role;
use App\State;
use App\User;
use App\Zip;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spinen\MailAssertions\MailTracking;
use Tests\Factories\UserFactory;
use Tests\TestCase;

/**
 * Class StoreRegistrationTest
 * @package Tests\Feature\Register
 */
class StoreRegistrationTest extends TestCase
{
    use RefreshDatabase, MailTracking;

    /**
     * @var State
     */
    protected $state;

    protected $data = [];

    public function setUp(): void
    {
        parent::setUp();
        $this->state = factory(State::class)->create();
        $this->data = $this->valid_data(['state_id' => $this->state->id]);
    }

    public function test_we_can_register()
    {

        $response = $this
            ->withoutExceptionHandling()
            ->from(route('register.create'))
            ->post(route('register.store'), $this->data);

        $response->assertRedirect('/');
        $response->assertStatus(302);
        $this->assertDatabaseHas('colleges', [
            'name' => $this->valid_data()['institution'],
            'address' => $this->valid_data()['address'],
            'city' => $this->valid_data()['city'],
            'state_id' => $this->valid_data()['state_id'],
            'zip' => $this->valid_data()['zip'],
        ]);
        $this->assertDatabaseHas('users', [
            'email'          => $this->valid_data()['register_email'],
            'account_status' => 'Pending',
        ]);
        $this->assertDatabaseHas('accounts', [
            'first_name' => $this->valid_data()['first_name'],
            'last_name'  => $this->valid_data()['last_name'],
        ]);

        tap(User::whereEmail($this->valid_data()['register_email'])->first(), function ($user) {
            $this->assertEquals($user->colleges()->first()->name, $this->valid_data()['institution']);
        });

        $this->seeEmailWasSent();
        $this->seeEmailTo(env('REGISTRATION_SUPPORT_EMAIL'));
    }

    public function test_the_first_name_field_is_required()
    {
        $response = $this->from(route('register.create'))
            ->post(route('register.store'), $this->valid_data(['first_name' => '']));

        $response->assertStatus(302);
        $response->assertSessionHasErrors('first_name');
        $response->assertRedirect(route('register.create'));
        $this->assertDatabaseMissing('users', ['email' => $this->valid_data()['register_email']]);
        $this->assertDatabaseMissing('colleges', ['name' => $this->valid_data()['institution']]);
        $this->assertDatabaseMissing('accounts', [
            'first_name' => $this->valid_data()['first_name'],
            'last_name'  => $this->valid_data()['last_name'],
        ]);
    }

    public function test_the_last_name_field_is_required()
    {
        $response = $this->from(route('register.create'))
            ->post(route('register.store'), $this->valid_data(['last_name' => '']));

        $response->assertStatus(302);
        $response->assertSessionHasErrors('last_name');
        $response->assertRedirect(route('register.create'));
        $this->assertDatabaseMissing('users', ['email' => $this->valid_data()['register_email']]);
        $this->assertDatabaseMissing('colleges', ['name' => $this->valid_data()['institution']]);
        $this->assertDatabaseMissing('accounts', [
            'first_name' => $this->valid_data()['first_name'],
            'last_name'  => $this->valid_data()['last_name'],
        ]);
    }

    public function test_the_email_field_is_required()
    {
        $response = $this->from(route('register.create'))
            ->post(route('register.store'), $this->valid_data(['register_email' => '']));

        $response->assertStatus(302);
        $response->assertSessionHasErrors('register_email');
        $response->assertRedirect(route('register.create'));
        $this->assertDatabaseMissing('users', ['email' => $this->valid_data()['register_email']]);
        $this->assertDatabaseMissing('colleges', ['name' => $this->valid_data()['institution']]);
        $this->assertDatabaseMissing('accounts', [
            'first_name' => $this->valid_data()['first_name'],
            'last_name'  => $this->valid_data()['last_name'],
        ]);
    }

    public function test_the_email_field_is_invalid()
    {
        $response = $this->from(route('register.create'))
            ->post(route('register.store'), $this->valid_data(['register_email' => 'invalid-email']));

        $response->assertStatus(302);
        $response->assertSessionHasErrors('register_email');
        $response->assertRedirect(route('register.create'));
        $this->assertDatabaseMissing('users', ['email' => $this->valid_data()['register_email']]);
        $this->assertDatabaseMissing('colleges', ['name' => $this->valid_data()['institution']]);
        $this->assertDatabaseMissing('accounts', [
            'first_name' => $this->valid_data()['first_name'],
            'last_name'  => $this->valid_data()['last_name'],
        ]);
    }

    public function test_the_email_field_is_unique()
    {
        UserFactory::createUser(['email' => 'taken-email@email.com']);
        $response = $this->from(route('register.create'))
            ->post(route('register.store'), $this->valid_data(['register_email' => 'taken-email@email.com']));

        $response->assertStatus(302);
        $response->assertSessionHasErrors('register_email');
        $response->assertRedirect(route('register.create'));
        $this->assertDatabaseMissing('users', ['email' => $this->valid_data()['register_email']]);
        $this->assertDatabaseMissing('colleges', ['name' => $this->valid_data()['institution']]);
        $this->assertDatabaseMissing('accounts', [
            'first_name' => $this->valid_data()['first_name'],
            'last_name'  => $this->valid_data()['last_name'],
        ]);
    }

    public function test_the_institution_field_is_required()
    {
        $response = $this->from(route('register.create'))
            ->post(route('register.store'), $this->valid_data(['institution' => '']));

        $response->assertStatus(302);
        $response->assertSessionHasErrors('institution');
        $response->assertRedirect(route('register.create'));
        $this->assertDatabaseMissing('users', ['email' => $this->valid_data()['register_email']]);
        $this->assertDatabaseMissing('colleges', ['name' => $this->valid_data()['institution']]);
        $this->assertDatabaseMissing('accounts', [
            'first_name' => $this->valid_data()['first_name'],
            'last_name'  => $this->valid_data()['last_name'],
        ]);
    }

    public function test_the_zip_field_is_required()
    {
        $response = $this->from(route('register.create'))
            ->post(route('register.store'), $this->valid_data(['zip' => '']));

        $response->assertStatus(302);
        $response->assertSessionHasErrors('zip');
        $response->assertRedirect(route('register.create'));
        $this->assertDatabaseMissing('users', ['email' => $this->valid_data()['register_email']]);
        $this->assertDatabaseMissing('colleges', ['name' => $this->valid_data()['institution']]);
        $this->assertDatabaseMissing('accounts', [
            'first_name' => $this->valid_data()['first_name'],
            'last_name'  => $this->valid_data()['last_name'],
        ]);
    }

    public function test_the_zip_field_is_at_least_five_characters()
    {
        $response = $this->from(route('register.create'))
            ->post(route('register.store'), $this->valid_data(['zip' => '0000']));

        $response->assertStatus(302);
        $response->assertSessionHasErrors('zip');
        $response->assertRedirect(route('register.create'));
        $this->assertDatabaseMissing('users', ['email' => $this->valid_data()['register_email']]);
        $this->assertDatabaseMissing('colleges', ['name' => $this->valid_data()['institution']]);
        $this->assertDatabaseMissing('accounts', [
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
            'address'            => '123 Street',
            'city'            => 'City',
            'state_id'            => 1,
            'zip'            => '11111',
        ], $data);
    }
}