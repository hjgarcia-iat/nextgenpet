<?php

namespace Tests\Feature\PasswordRecover;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Password;
use Tests\TestCase;
use Tests\Traits\TestHelperTrait;

/**
 * Class UpdatePasswordEditFormTest
 * @package Tests\Feature\PasswordRecover
 */
class UpdatePasswordEditFormTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions, TestHelperTrait;

    /**
     * @var User
     */
    protected $user;
    /**
     * @var string
     */
    protected $token;

    public function setUp()
    {
        parent::setUp();

        $this->user  = \UserFactory::createNextGenPetUser(['password' => 'old_password']);
        $this->token = Password::broker()->createToken($this->user);
    }

    public function test_the_password_can_be_updated_by_a_next_gen_pet_user()
    {
        $response = $this->from(route('recover.password.edit', $this->token))->post(route('recover.password.update'), $this->valid_data());

        $response->assertResponseStatus(302);
        $response->assertRedirectedTo('/');
        $this->assertTrue(auth()->check());
        tap($this->user->fresh(), function ($user) {
            $this->assertTrue(\Hash::check($this->valid_data()['password'], $user->password));
        });
    }

    public function test_the_password_cannot_be_updated_by_an_admin_user()
    {
        $user  = \UserFactory::createAdminUser(['password' => 'admin_password']);
        $token = Password::broker()->createToken($user);

        $response = $this->from(route('recover.password.edit', $token))->post(route('recover.password.update'), $this->valid_data(['email' => $user->email, 'token' => $token]));

        $response->assertResponseStatus(404);
        $this->assertFalse(auth()->check());
        $this->assertTrue(\Hash::check('admin_password', $user->fresh()->password));
    }

    public function test_the_password_cannot_be_updated_by_a_super_admin_user()
    {
        $user  = \UserFactory::createSuperAdminUser(['password' => 'admin_password']);
        $token = Password::broker()->createToken($user);

        $response = $this->from(route('recover.password.edit', $token))->post(route('recover.password.update'), $this->valid_data(['email' => $user->email, 'token' => $token]));

        $response->assertResponseStatus(404);
        $this->assertFalse(auth()->check());
        $this->assertTrue(\Hash::check('admin_password', $user->fresh()->password));
    }


    public function test_the_email_field_is_required()
    {
        $response = $this->from(route('recover.password.edit', $this->token))->post(route('recover.password.update'), $this->valid_data(['email' => '']));

        $response->assertResponseStatus(302);
        $response->assertSessionHasErrors('email');
        $response->assertRedirectedTo(route('recover.password.edit', $this->token));
        tap($this->user->fresh(), function ($user) {
            $this->assertTrue(\Hash::check('old_password', $user->password));
        });
    }

    public function test_the_email_field_is_valid()
    {
        $response = $this->from(route('recover.password.edit', $this->token))->post(route('recover.password.update'), $this->valid_data(['email' => 'invalid-email']));

        $response->assertResponseStatus(302);
        $response->assertSessionHasErrors('email');
        $response->assertRedirectedTo(route('recover.password.edit', $this->token));
        tap($this->user->fresh(), function ($user) {
            $this->assertTrue(\Hash::check('old_password', $user->password));
        });
    }

    public function test_the_password_field_is_required()
    {
        $response = $this->from(route('recover.password.edit', $this->token))->post(route('recover.password.update'), $this->valid_data(['password' => '']));

        $response->assertResponseStatus(302);
        $response->assertSessionHasErrors('password');
        $response->assertRedirectedTo(route('recover.password.edit', $this->token));
        tap($this->user->fresh(), function ($user) {
            $this->assertTrue(\Hash::check('old_password', $user->password));
        });
    }

    public function test_the_password_confirmation_field_is_required()
    {
        $response = $this->from(route('recover.password.edit', $this->token))->post(route('recover.password.update'), $this->valid_data(['password_confirmation' => '']));

        $response->assertResponseStatus(302);
        $response->assertSessionHasErrors('password');
        $response->assertRedirectedTo(route('recover.password.edit', $this->token));
        tap($this->user->fresh(), function ($user) {
            $this->assertTrue(\Hash::check('old_password', $user->password));
        });
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
            'token'                 => $this->token,
            'email'                 => $this->user->email,
            'password'              => 'password',
            'password_confirmation' => 'password',
        ], $data);
    }
}