<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class MyAccountAreaTest
 */
class MyAccountAreaTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @test
     */
    public function we_can_see_the_my_account_page()
    {
        $user = $this->createNextGenPetUser();
        $this->actingAs($user);

        $this->visit(route('my-account'))
            ->see($user->account->first_name)
            ->see($user->account->last_name)
            ->see($user->email);
    }

    /**
     * @test
     */
    public function we_update_user_details()
    {
        $user = $this->createNextGenPetUser();
        $this->actingAs($user);

        $this->visit(route('my-account'))
            ->submitForm('Update', [
                'first_name' => 'Updated First Name',
                'last_name'  => 'Updated Last Name',
                'email'     => $user->email,
            ])->see('Account has been updated!')
            ->seeInDatabase('accounts', ['user_id' => $user->id, 'first_name' => 'Updated First Name', 'last_name' => 'Updated Last Name']);
    }
}