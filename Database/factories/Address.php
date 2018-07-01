<?php

use Faker\Generator as Faker;

use Modules\Addresses\Entities\Address;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'address1' => $faker->streetAddress,
        'address2' => $faker->secondaryAddress,
        'postalCode' => $faker->postcode,
        'city' => $faker->city,
        'province' => $faker->state,
        'countryCode' => 'ru',
    ];
});
