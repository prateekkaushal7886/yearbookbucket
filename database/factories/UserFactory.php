<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
	static $password;

	return [
		'name' => $faker->name,
		'email' => $faker->unique()->safeEmail,
		'password' => bcrypt('07-05-1997'),
		'remember_token' => str_random(10),
		'email_insti' => $faker->safeEmail,
		'dob' => $faker->date($format = 'd-m-Y', $max = 'now'),
		'HOR' =>$faker->text,
		'course' => $faker->text,
		'department' => $faker->text,
		'phone' => $faker->phoneNumber,
		'view_self' => '',
		'pro_pic' => '',
		'rollno' => '16CH'.$faker->numberBetween($min =10000, $max = 30050)
	];
});
