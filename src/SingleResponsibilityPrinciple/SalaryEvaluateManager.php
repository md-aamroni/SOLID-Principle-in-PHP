<?php

namespace Solid\SingleResponsibilityPrinciple;

use Solid\SingleResponsibilityPrinciple\Resources\Address;
use Solid\SingleResponsibilityPrinciple\Resources\Profile;

class SalaryEvaluateManager
{
    /**
     * Create a new manager instance
     * @param Profile $profile
     * @param Address $address
     * @return void
     */
    public function __construct(private readonly Profile $profile, private readonly Address $address)
    {
        // TODO: Your Code Here...
    }

    /**
     * Get the profile instance
     * @return Profile
     */
    public function getProfile(): Profile
    {
        return $this->profile;
    }

    /**
     * Get the address instance
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }
}
