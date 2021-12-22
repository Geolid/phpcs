<?php

declare(strict_types=1);

use PhpCsFixer\Finder;

$config = include __DIR__ . '/vendor/geolid/phpcs/src/Geolid/.php-cs-fixer.php';

return $config
    ->setFinder(Finder::create()
        ->in([
            __DIR__.'/src',
        ])
        ->append([
            __DIR__.'/public/index.php',
            __DIR__.'/config/bundles.php',
        ])
    )
;
