<?php

namespace Solid\SingleResponsibilityPrinciple\Resources;

use Solid\SingleResponsibilityPrinciple\Interfaces\ConcreteSingleResponsibility;

class Profile extends ConcreteSingleResponsibility
{
    /**
     * Create a new address instance.
     * @param  string $firstName
     * @param  string $lastName
     * @param  string $birthDate
     * @return void
     */
    public function __construct(private readonly string $firstName, private readonly string $lastName, private readonly string $birthDate)
    {
        $this->collection = [
            'first_name'    => $this->firstName,
            'last_name'     => $this->lastName,
            'birth_date'    => $this->birthDate,
        ];
    }

    /**
     * Get the first name.
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * Get the last name.
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * Get the birthdate.
     * @return string
     */
    public function getBirthDate(): string
    {
        return $this->birthDate;
    }

    /**
     * Get the birthdate.
     * @return string
     */
    public function getCurrentAge(): string
    {
        return date('Y') - date('Y', strtotime($this->birthDate));
    }
}
