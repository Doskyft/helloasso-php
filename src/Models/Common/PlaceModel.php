<?php

declare(strict_types=1);

namespace Helloasso\Models\Common;

use Helloasso\Models\HelloassoObject;
use Helloasso\Models\Shared\GeoLocation;

class PlaceModel implements HelloassoObject
{
    private string $address;
    private string $name;
    private string $city;
    private string $zipCode;
    private string $country;
    private GeoLocation $geoLocation;

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    public function setZipCode(string $zipCode): self
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getGeoLocation(): GeoLocation
    {
        return $this->geoLocation;
    }

    public function setGeoLocation(GeoLocation $geoLocation): self
    {
        $this->geoLocation = $geoLocation;

        return $this;
    }
}