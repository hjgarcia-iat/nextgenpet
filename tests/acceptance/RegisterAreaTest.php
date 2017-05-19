<?php
use App\State;
use App\Zip;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterAreaTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @test
     */
    public function we_can_view_the_register_area()
    {
        $this->visit(route('register.create'))
            ->see('Register')
            ->assertResponseStatus(200);
    }

    /**
     * @test
     */
    public function we_can_register_a_college_user()
    {
        $zip   = factory(Zip::class)->create();
        $state = factory(State::class)->create(['abbr' => $zip->state_prefix]);
        $role  = factory(App\Role::class)->create(['name' => 'nextgen_pet_user']);

        $this->visit(route('register.create'))
            ->submitForm('Register', [
                'first_name'     => 'John',
                'last_name'      => 'Doe',
                'register_email' => 'email@email.com',
                'institution'    => 'College',
                'zip'            => $zip->zip_code,
            ])
            ->seeInDatabase('users', ['email' => 'email@email.com', 'account_status' => 'pending'])
            ->seeInDatabase('accounts', ['first_name' => 'John', 'last_name' => 'Doe']);
    }
}