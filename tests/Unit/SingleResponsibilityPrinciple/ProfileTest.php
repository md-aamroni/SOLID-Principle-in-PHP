<?php

use Solid\SingleResponsibilityPrinciple\Resources\Profile;

test('test that profile can return an array', function () {
    $profile = new Profile('John', 'Smith', '2000-12-14');
    expect($profile->toArray())->toBeArray();
});

test('test that profile can return an object', function () {
    $profile = new Profile('Chris', 'Hemsworth', '1995-05-12');
    expect($profile->toObject())->toBeObject();
});

test('test that profile can return a string', function () {
    $profile = new Profile('Tom', 'Cruise', '1998-01-22');
    expect($profile->toString())->toBeString();
});
