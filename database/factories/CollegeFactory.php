<?php

namespace Database\Factories;

use App\Models\College;
use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

class CollegeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = College::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'state_id' => function () {
                return State::factory()->create()->id;
            },
            'name'     => $this->faker->word,
            'address'  => $this->faker->text(),
            'city'     => $this->faker->word,
            'zip'      => $this->faker->postcode,
        ];
    }
}
