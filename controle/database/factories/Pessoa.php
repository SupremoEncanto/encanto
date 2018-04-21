<?php

use Faker\Generator as Faker;


$factory->define(App\Pessoa::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'aniversario' => $faker->text,
        'ramal' => $faker->text,
        'telefone' => $faker->phoneNumber,
        'setor' => $faker->text
    ];
});
