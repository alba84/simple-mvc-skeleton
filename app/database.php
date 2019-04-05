<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'        => 'mysql',
    'host'          => 'localhost',
    'port'          => 3306,
    'username'      => 'pomogator_slim',
    'password'      => '123qwe!@#QWE',
    'database'      => 'pomogator_slim',
    'charset'       => 'utf8',
    'collation'     => 'utf8_unicode_ci',
    'prefix'        => '',
]);

$capsule->bootEloquent();

