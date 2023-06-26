<?php


use Solid\SingleResponsibilityPrinciple\Resources\Address;
use Solid\SingleResponsibilityPrinciple\Resources\Profile;
use Solid\SingleResponsibilityPrinciple\SalaryEvaluateManager;

test('test that salary evaluate manager can return profile instance', function () {
    $profile = new Profile('John', 'Smith', '2000-12-14');
    $address = new Address('2957 Vernon Street', 'Vista', 'California - CA', '92083', '33.212688', '-117.162079');
    $process = new SalaryEvaluateManager($profile, $address);
    expect($process->getProfile())->toBeObject()->toBeInstanceOf(Profile::class);
});

test('test that salary evaluate manager can return address instance', function () {
    $profile = new Profile('John', 'Smith', '2000-12-14');
    $address = new Address('2957 Vernon Street', 'Vista', 'California - CA', '92083', '33.212688', '-117.162079');
    $process = new SalaryEvaluateManager($profile, $address);
    expect($process->getAddress())->toBeObject()->toBeInstanceOf(Address::class);
});