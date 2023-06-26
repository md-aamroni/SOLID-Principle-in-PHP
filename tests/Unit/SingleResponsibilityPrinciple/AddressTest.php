<?php

use Solid\SingleResponsibilityPrinciple\Resources\Address;

test('test that address can return an array', function () {
    $address = new Address('2957 Vernon Street', 'Vista', 'California - CA', '92083', '33.212688', '-117.162079');
    expect($address->toArray())->toBeArray();
});

test('test that address can return an object', function () {
    $address = new Address('4252 Trails End Road', 'Miami', 'Florida - FL', '33131', '25.721615', '-80.227425');
    expect($address->toObject())->toBeObject();
});

test('test that address can return a string', function () {
    $address = new Address('4112 Feathers Hooves Drive', 'Garden City', 'New York - NY', '11590', '40.750072', '-73.538300');
    expect($address->toString())->toBeString();
});
