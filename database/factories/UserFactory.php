<?php

namespace Database\Factories;

use App\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username'           => $this->faker->userName,
            'email'              => $this->faker->email,
            'password'           => bcrypt('password'),
            'account_status'     => 'active',
            'user_group_id'      => 1,
        ];
    }
}
