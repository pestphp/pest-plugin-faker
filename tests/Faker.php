<?php

use function Pest\Faker\fake;

it('has faker')
    ->assertTrue(function_exists('Pest\Faker\fake'));

it('can use faker instance')
    ->assertIsString(fake()->name);

it('can use faker with locale instance')
    ->assertIsString(fake('fr_FR')->name);
