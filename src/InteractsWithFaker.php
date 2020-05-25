<?php

declare(strict_types=1);

if (!function_exists('fakerWithLocale')) {
    function fakerWithLocale(string $locale): Faker\Generator
    {
        return Faker\Factory::create($locale);
    }
}

if (!function_exists('faker')) {
    function faker(): Faker\Generator
    {
        return Faker\Factory::create(Faker\Factory::DEFAULT_LOCALE);
    }
}
