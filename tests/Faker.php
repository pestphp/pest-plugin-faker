<?php

use function Pest\Faker\faker;

it('has faker')
    ->assertTrue(function_exists('Pest\Faker\faker'));

it('can use faker instance')
    ->assertIsString(faker()->name);

it('can use faker with locale instance')
    ->assertIsString(faker('fr_FR')->name);
