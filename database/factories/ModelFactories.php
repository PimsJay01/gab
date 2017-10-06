<?php

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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    $date = $faker->dateTimeThisYear($max = 'now');
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('password'),
        'remember_token' => str_random(10),
        'created_at' => $date,
        'updated_at' => $date,
    ];
});

$factory->define(App\Models\News::class, function (Faker\Generator $faker) {
    $date = $faker->dateTimeThisYear($max = 'now');
    return [
        'text' => $faker->text,
        'type' => $faker->randomElement(['agenda', 'calendrier', 'divers',
            'people', 'reglement', 'sanctions']),
        'created_at' => $date,
        'updated_at' => $date,
    ];
});

$factory->defineAs(App\Models\Court::class, 'previous', function (Faker\Generator $faker) {
    $date = $faker->dateTimeThisYear($max = 'now');
    return [
        'court_info_id' => factory(App\Models\CourtInfo::class)->create()->id,
        'season_id' => 1,
        'created_at' => $date,
        'updated_at' => $date,
    ];
});

$factory->defineAs(App\Models\Court::class, 'current', function (Faker\Generator $faker) {
    $date = $faker->dateTimeThisYear($max = 'now');
    return [
        'court_info_id' => factory(App\Models\CourtInfo::class)->create()->id,
        'season_id' => 2,
        'created_at' => $date,
        'updated_at' => $date,
    ];
});

$factory->define(App\Models\CourtInfo::class, function (Faker\Generator $faker) {
    $name = $faker->company;
    $date = $faker->dateTimeThisYear($max = 'now');
    return [
        'court_type_id' => rand(1, 6),
        'address_id' => factory(App\Models\Address::class)->create()->id,
        'name' => $name,
        'slug' => str_slug($name),
        'created_at' => $date,
        'updated_at' => $date,
    ];
});

$factory->define(App\Models\Address::class, function (Faker\Generator $faker) {
    $date = $faker->dateTimeThisYear($max = 'now');
    return [
        'street' => $faker->streetName,
        'number' => $faker->buildingNumber,
        'city' => $faker->city,
        'postcode' => $faker->postcode,
        'area' => $faker->state,
        'created_at' => $date,
        'updated_at' => $date,
    ];
});
