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
        'username'       => $faker->userName,
        'email'          => $faker->email,
        'password'       => Hash::make(str_random(10)),
        'account_status' => 'active',
        'account_expiration' => Carbon::now()->addYear(6),
        'user_group_id'  => function () {
            return factory(App\Group::class)->create()->id;
        },
        'order_number'   => 'IAT',
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Student::class, function (Faker\Generator $faker) {
    return [
        'user_id'        => function () {
            return factory(App\User::class)->create()->id;
        },
        'susername'      => $faker->userName,
        'spassword'      => Hash::make(str_random(10)),
        'student_number' => $faker->numberBetween(0, 500),
    ];
});

$factory->define(App\Account::class, function (Faker\Generator $faker) {
    return [
        'user_id'    => function () {
            return factory(App\User::class)->create()->id;
        },
        'first_name' => $faker->name,
        'last_name'  => $faker->name,
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


$factory->define(App\State::class, function (Faker\Generator $faker) {
    return [
        'abbr'            => $faker->stateAbbr,
        'name'            => $faker->state,
        'sales_person_id' => $faker->numberBetween(0, 1000),
    ];
});

$factory->define(App\Zip::class, function (Faker\Generator $faker) {
    return [
        'zip_code'     => $faker->postcode,
        'city'         => $faker->word,
        'state_name'   => $faker->state,
        'state_prefix' => $faker->stateAbbr,
        'county'       => $faker->word,
        'lat'          => $faker->randomDigit,
        'lon'          => $faker->randomDigit,
    ];
});

$factory->define(App\Book::class, function (Faker\Generator $faker) {
    return [
        'series_id'          => $faker->numberBetween(0, 500),
        'discipline'         => $faker->unique()->word,
        'name'               => $faker->word,
        'path'               => $faker->unique()->word,
        'cover'              => $faker->unique()->word,
        'image'              => $faker->unique()->word,
        'description'        => $faker->text(),
        'book_type'          => $faker->word,
        'controller'         => $faker->unique()->word,
        'status'             => 'Active',
        'review'             => $faker->boolean(),
        'pdf_book'           => $faker->boolean(),
        'html_book'          => $faker->boolean(),
        'slug'               => $faker->slug(),
        'sample'             => $faker->boolean(),
        'student_accessible' => $faker->boolean(),
        'active'             => $faker->boolean(),
    ];
});



