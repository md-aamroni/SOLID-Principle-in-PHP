<?php

namespace Solid\SingleResponsibilityPrinciple\Resources;

use Solid\SingleResponsibilityPrinciple\Interfaces\ConcreteSingleResponsibility;

class Address extends ConcreteSingleResponsibility
{
    /**
     * Create a new address instance.
     * @param  string      $street
     * @param  string      $city
     * @param  string      $state
     * @param  string      $postcode
     * @param  string|null $latitude
     * @param  string|null $longitude
     * @return void
     */
    public function __construct(private readonly string $street, private readonly string $city, private readonly string $state, private readonly string $postcode, private readonly ?string $latitude, private readonly ?string $longitude)
    {
        $this->collection = [
            'street'    => $this->street,
            'city'      => $this->city,
            'state'     => $this->state,
            'postcode'  => $this->postcode,
            'latitude'  => $this->latitude,
            'longitude' => $this->longitude,
        ];
    }

    /**
     * Get the street name.
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * Get the city title.
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Get the state title.
     * @return string
     */
    public function getState(): string
    {
        return $this->street;
    }

    /**
     * Get the postcode number.
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }

    /**
     * Get the latitude number.
     * @return string|null
     */
    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    /**
     * Get the longitude number.
     * @return string|null
     */
    public function getLongitude(): ?string
    {
        return $this->longitude;
    }
}
