<?php
use Faker\Generator as Faker;

$factory->define(App\Models\People::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'lastname' => $faker->lastname,
        'phone' => $faker->phoneNumber,
        'street'=> $faker->street_name,
        'country'=>$faker->country

    ];
});
?>