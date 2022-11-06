<?php

declare(strict_types=1);

namespace Helloasso\Models\Shared;

use Helloasso\Models\HelloassoObject;

class GeoLocation implements HelloassoObject
{
    private float $latitude;
    private float $longitude;

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }
}