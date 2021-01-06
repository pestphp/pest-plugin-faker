<?php

declare(strict_types=1);

namespace Pest\Faker;

use Faker\Factory;
use Faker\Generator;

if (!function_exists('Pest\Faker\faker')) {
    /** @phpstan-ignore-next-line */
    function faker(string $locale = null): Generator
    {
        return Factory::create($locale ?? Factory::DEFAULT_LOCALE);
    }
}
