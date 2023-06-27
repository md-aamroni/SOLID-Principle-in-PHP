<?php

use SRP\Resources\Address;
use SRP\Resources\Profile;
use SRP\SalaryEvaluateManager;

test('test that salary evaluate manager can return profile instance', function () {
    $profile = new Profile('John', 'Smith', '2000-12-14');
    $address = new Address('2957 Vernon Street', 'Vista', 'California - CA', '92083', '33.212688', '-117.162079');
    $process = new SalaryEvaluateManager($profile, $address);
    expect($process->getProfile())->toBeObject()->toBeInstanceOf(Profile::class)
        ->and($process->getProfile()->getFirstName())->toBeString()->toEqual('John')
        ->and($process->getProfile()->getLastName())->toBeString()->toEqual('Smith')
        ->and($process->getProfile()->getFullName())->toBeString()->toEqual('John Smith')
        ->and($process->getProfile()->getBirthDate())->toBeString()->toEqual('2000-12-14')
        ->and($process->getProfile()->getCurrentAge())->toBeString()->toEqual('23');
});

test('test that salary evaluate manager can return address instance', function () {
    $profile = new Profile('John', 'Smith', '2000-12-14');
    $address = new Address('2957 Vernon Street', 'Vista', 'California - CA', '92083', '33.212688', '-117.162079');
    $process = new SalaryEvaluateManager($profile, $address);
    expect($process->getAddress())->toBeObject()->toBeInstanceOf(Address::class)
        ->and($process->getAddress()->getStreet())->toBeString()->toEqual('2957 Vernon Street')
        ->and($process->getAddress()->getCity())->toBeString()->toEqual('Vista')
        ->and($process->getAddress()->getState())->toBeString()->toEqual('California - CA')
        ->and($process->getAddress()->getPostcode())->toBeString()->toEqual('92083')
        ->and($process->getAddress()->getLatitude())->toBeString()->toEqual('33.212688')
        ->and($process->getAddress()->getLongitude())->toBeString()->toEqual('-117.162079');
});
