<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(\App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'username'           => $faker->userName,
        'email'              => $faker->email,
        'password'           => Hash::make(str_random(10)),
        'account_status'     => 'active',
        'user_group_id'      => 1,
        'remember_token'     => str_random(10),
    ];
});


$factory->define(\App\Models\Account::class, function (Faker\Generator $faker) {
    return [
        'user_id'    => function () {
            return factory(\App\Models\User::class)->create()->id;
        },
        'first_name' => $faker->firstName,
        'last_name'  => $faker->lastName,
    ];
});

$factory->define(\App\Models\Group::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
    ];
});


$factory->define(\App\Models\Role::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
    ];
});

$factory->define(\App\Models\Permission::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
    ];
});

$factory->define(\App\Models\College::class, function (Faker\Generator $faker) {
    return [
        'state_id' => function () {
            return factory(\App\Models\State::class)->create()->id;
        },
        'name'     => $faker->word,
        'address'  => $faker->text(),
        'city'     => $faker->word,
        'zip'      => $faker->postcode,
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\App\Models\State::class, function (Faker\Generator $faker) {
    return [
        'abbr' => $faker->citySuffix,
        'name' => $faker->company,
    ];
});





