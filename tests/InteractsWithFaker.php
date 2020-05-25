<?php

it('has faker')
    ->assertTrue(function_exists('faker'));

it('has fakerWithLocale')
    ->assertTrue(function_exists('fakerWithLocale'));

it('can use faker methods')
    ->assertIsString(faker()->name);
