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

$factory->define(App\User::class, function (Faker\Generator $faker){
	return [
		'username'       => $faker->userName,
		'email'          => $faker->email,
		'password'       => Hash::make(str_random(10)),
		'account_status' => 'active',
		'user_group_id'  => function (){
			return factory(App\Group::class)->create()->id;
		},
		'order_number'   => 'IAT',
		'remember_token' => str_random(10),
	];
});


$factory->define(App\Account::class, function (Faker\Generator $faker){
	return [
		'user_id'    => function (){
			return factory(App\User::class)->create()->id;
		},
		'first_name' => $faker->name,
		'last_name'  => $faker->name,
	];
});


$factory->define(App\Role::class, function (Faker\Generator $faker){
	return [
		'name' => $faker->word,
	];
});

$factory->define(App\Permission::class, function (Faker\Generator $faker){
	return [
		'name' => $faker->word,
	];
});

$factory->define(App\College::class, function (Faker\Generator $faker){
	return [
		'state_id' => function (){
			return factory(App\State::class)->create()->id;
		},
		'name'     => $faker->word,
		'address'  => $faker->text(),
		'city'     => $faker->word,
		'zip'      => $faker->postcode,
	];
});


$factory->define(App\State::class, function (Faker\Generator $faker){
	return [
		'abbr'            => $faker->unique()->word,
		'name'            => $faker->unique()->word,
		'sales_person_id' => $faker->numberBetween(0, 1000),
	];
});

$factory->define(App\Zip::class, function (Faker\Generator $faker){
	return [
		'zip_code'     => $faker->postcode,
		'city'         => $faker->word,
		'state_name'   => $faker->word,
		'state_prefix' => $faker->unique()->word,
		'county'       => $faker->word,
		'lat'          => $faker->randomDigit,
		'lon'          => $faker->randomDigit,
	];
});



