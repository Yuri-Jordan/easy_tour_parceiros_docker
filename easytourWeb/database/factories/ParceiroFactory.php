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

$factory->define(App\Parceiro::class, function (Faker $faker) {

    return [
        'cpf' => str_random(5),
        'cnpj' => str_random(1),
        'nome_fantasia' => $faker->name,
        'razao_social' => $faker->name,
        'endereco' => str_random(10),
    ];

});
