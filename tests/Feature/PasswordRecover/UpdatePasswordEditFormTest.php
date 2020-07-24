<?php

namespace Tests\Feature\PasswordRecover;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Password;
use Tests\Factories\UserFactory;
use Tests\TestCase;

/**
 * Class UpdatePasswordEditFormTest
 * @package Tests\Feature\PasswordRecover
 */
class UpdatePasswordEditFormTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @var User
     */
    protected $user;
    /**
     * @var string
     */
    protected $token;

    public function setUp(): void
    {
        parent::setUp();

        $this->user  = UserFactory::createNextGenPetUser(['password' => 'old_password']);
        $this->token = Password::broker()->createToken($this->user);
    }

    public function test_the_password_can_be_updated_by_a_next_gen_pet_user()
    {
        $response = $this->from(route('recover.password.edit', [$this->user->email, $this->token]))->post(route('recover.password.update'), $this->valid_data());

        $response->assertStatus(302);
        $response->assertRedirect('/');
        $this->assertTrue(auth()->check());
        tap($this->user->fresh(), function ($user) {
            $this->assertTrue(\Hash::check($this->valid_data()['password'], $user->password));
        });
    }

    public function test_the_password_cannot_be_updated_by_an_admin_user()
    {
        $user  = UserFactory::createAdminUser(['password' => 'admin_password']);
        $token = Password::broker()->createToken($user);

        $response = $this->from(route('recover.password.edit', [$user->email, $this->token]))->post(route('recover.password.update'), $this->valid_data(['email' => $user->email, 'token' => $token]));

        $response->assertStatus(404);
        $this->assertFalse(auth()->check());
        $this->assertTrue(\Hash::check('admin_password', $user->fresh()->password));
    }

    public function test_the_password_cannot_be_updated_by_a_super_admin_user()
    {
        $user  = UserFactory::createSuperAdminUser(['password' => 'admin_password']);
        $token = Password::broker()->createToken($user);

        $response = $this->from(route('recover.password.edit', [$user->email, $this->token]))->post(route('recover.password.update'), $this->valid_data(['email' => $user->email, 'token' => $token]));

        $response->assertStatus(404);
        $this->assertFalse(auth()->check());
        $this->assertTrue(\Hash::check('admin_password', $user->fresh()->password));
    }


    public function test_the_email_field_is_required()
    {
        $response = $this->from(route('recover.password.edit', [$this->user->email, $this->token]))->post(route('recover.password.update'), $this->valid_data(['email' => '']));

        $response->assertStatus(302);
        $response->assertSessionHasErrors('email');
        $response->assertRedirect(route('recover.password.edit', [$this->user->email, $this->token]));
        tap($this->user->fresh(), function ($user) {
            $this->assertTrue(\Hash::check('old_password', $user->password));
        });
    }

    public function test_the_email_field_is_valid()
    {
        $response = $this->from(route('recover.password.edit', [$this->user->email, $this->token]))->post(route('recover.password.update'), $this->valid_data(['email' => 'invalid-email']));

        $response->assertStatus(302);
        $response->assertSessionHasErrors('email');
        $response->assertRedirect(route('recover.password.edit', [$this->user->email, $this->token]));
        tap($this->user->fresh(), function ($user) {
            $this->assertTrue(\Hash::check('old_password', $user->password));
        });
    }

    public function test_the_password_field_is_required()
    {
        $response = $this->from(route('recover.password.edit', [$this->user->email, $this->token]))->post(route('recover.password.update'), $this->valid_data(['password' => '']));

        $response->assertStatus(302);
        $response->assertSessionHasErrors('password');
        $response->assertRedirect(route('recover.password.edit', [$this->user->email, $this->token]));
        tap($this->user->fresh(), function ($user) {
            $this->assertTrue(\Hash::check('old_password', $user->password));
        });
    }

    public function test_the_password_confirmation_field_is_required()
    {
        $response = $this->from(route('recover.password.edit', [$this->user->email, $this->token]))->post(route('recover.password.update'), $this->valid_data(['password_confirmation' => '']));

        $response->assertStatus(302);
        $response->assertSessionHasErrors('password');
        $response->assertRedirect(route('recover.password.edit', [$this->user->email, $this->token]));
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