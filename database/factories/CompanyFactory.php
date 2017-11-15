<?php

use Faker\Generator as Faker;
use Ramsey\Uuid\Uuid;

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

$factory->define(App\Models\Company::class, function (Faker $faker) {

    $users = ['633c2f0e-aa29-47c2-b0f4-b37d24202c65', 'aac8281e-7751-4392-b18e-78b2996a2efe'];

    return [
        'id' => Uuid::uuid4()->toString(),
        'name' => $faker->name,
        'document' => $faker->numerify('##.###.###/####-##'),
        'address' => $faker->address,
        'zip_code' => $faker->numerify('#####-###'),
        'phone' => $faker->phoneNumber,
        'email' => $faker->email,
        'city_id' => $faker->numberBetween(1,5000),
        'user_id' => $users[rand(0, 1)],
    ];
});
