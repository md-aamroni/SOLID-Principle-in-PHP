<?php

use SRP\Resources\Profile;

test('test that profile can return an array', function () {
    $profile = new Profile('John', 'Smith', '2000-12-14');
    $resolve = ['first_name' => 'John', 'last_name' => 'Smith', 'birth_date' => '2000-12-14'];
    expect($profile->toArray())->toBeArray()->toEqual($resolve);
});

test('test that profile can return an object', function () {
    $profile = new Profile('Chris', 'Hemsworth', '1995-05-12');
    $resolve = ['first_name' => 'Chris', 'last_name' => 'Hemsworth', 'birth_date' => '1995-05-12'];
    expect($profile->toObject())->toBeObject()->toEqual(json_decode(json_encode($resolve)));
});

test('test that profile can return a string', function () {
    $profile = new Profile('Tom', 'Cruise', '1998-01-22');
    $resolve = ['first_name' => 'Tom', 'last_name' => 'Cruise', 'birth_date' => '1998-01-22'];
    expect($profile->toString())->toBeString()->toEqual(json_encode($resolve));
});
