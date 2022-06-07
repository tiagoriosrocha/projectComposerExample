<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';
require "Usuario.php";

use tiagoriosrocha\testcomposer\Usuario;
use Faker\Factory as Faker;

$faker = Faker::create();
$usuario = new Usuario($faker->name(), $faker->email());

if( $usuario->validarEmail($usuario->email) ){
    echo "e-mail válido: " . $usuario->email . PHP_EOL;
}else{
    echo "e-mail inválido: " . $usuario->email . PHP_EOL;
}
