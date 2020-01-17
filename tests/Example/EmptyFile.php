<?php

declare(strict_types=1);

$cast = (int) '5';

$array = [
    'tests' => 1,
];

$class = new \Example\Naming\NamingClass();

$class->superMethod(
    5,
    6.0,
);
