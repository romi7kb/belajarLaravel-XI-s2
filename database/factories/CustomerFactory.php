<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'kode_customer' => $faker->unique()->randomNumber,
        'name' => $faker->name,
        'email' => $faker->email,
        'country' => $faker->country,
        'city' => $faker->city,
        'address' => $faker->address,
        'contact_number' => $faker->e164PhoneNumber,
    ];
});
