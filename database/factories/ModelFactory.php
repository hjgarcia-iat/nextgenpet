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

use Carbon\Carbon;

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'username'           => $faker->userName,
        'email'              => $faker->email,
        'password'           => Hash::make(str_random(10)),
        'account_status'     => 'active',
        'user_group_id'      => 1,
        'remember_token'     => str_random(10),
    ];
});


$factory->define(App\Account::class, function (Faker\Generator $faker) {
    return [
        'user_id'    => function () {
            return factory(App\User::class)->create()->id;
        },
        'first_name' => $faker->firstName,
        'last_name'  => $faker->lastName,
    ];
});

$factory->define(App\Group::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
    ];
});


$factory->define(App\Role::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
    ];
});

$factory->define(App\Permission::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
    ];
});

$factory->define(App\College::class, function (Faker\Generator $faker) {
    return [
        'state_id' => function () {
            return factory(App\State::class)->create()->id;
        },
        'name'     => $faker->word,
        'address'  => $faker->text(),
        'city'     => $faker->word,
        'zip'      => $faker->postcode,
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\App\State::class, function (Faker\Generator $faker) {
    return [
        'abbr' => $faker->citySuffix,
        'name' => $faker->company,
    ];
});





