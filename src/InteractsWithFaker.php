<?php

declare(strict_types=1);

if (!function_exists('faker')) {
    /** @phpstan-ignore-next-line */
    function faker(string $locale = null): Faker\Generator
    {
        return Faker\Factory::create($locale ?? Faker\Factory::DEFAULT_LOCALE);
    }
}
