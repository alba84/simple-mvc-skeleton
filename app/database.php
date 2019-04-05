<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'        => getenv('DB_DRIVER'),
    'host'          => getenv('DB_HOST'),
    'port'          => getenv('DB_PORT'),
    'username'      => getenv('DB_USER'),
    'password'      => getenv('DB_PASS'),
    'database'      => getenv('DB_NAME'),
    'charset'       => getenv('DB_CHARSET'),
    'collation'     => getenv('DB_COLLATION'),
    'prefix'        => getenv('DB_PREFIX'),
]);

$capsule->bootEloquent();

