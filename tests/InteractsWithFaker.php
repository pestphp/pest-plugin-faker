<?php

it('has faker')
    ->assertTrue(function_exists('faker'));

it('has fakerWithLocale')
    ->assertTrue(function_exists('fakerWithLocale'));

it('can use faker instance')
    ->assertIsString(faker()->name);

it('can use fakerWithLocale instance')
    ->assertIsString(fakerWithLocale('fr_FR')->name);
