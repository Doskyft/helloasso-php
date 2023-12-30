<?php

declare(strict_types=1);

namespace Helloasso\Models\Carts;

use Helloasso\Models\HelloassoObject;

class CheckoutPayer implements HelloassoObject
{
    /**
     * Prénom du payeur.
     *
     * @example Jean
     */
    private ?string $firstName;

    /**
     * Nom du payeur.
     *
     * @example Dubois
     */
    private ?string $lastName;

    /**
     * Adresse Email.
     *
     * @example test@helloasso.org
     */
    private ?string $email;

    /**
     * Date de naissance du payeur.
     */
    private ?\DateTime $dateOfBirth;

    /**
     * Adresse du contributeur.
     */
    private ?string $address;

    /**
     * Ville.
     */
    private ?string $city;

    /**
     * Code postal.
     */
    private ?string $zipCode;

    /**
     * Pays.
     *
     * @see https://www.wikiwand.com/en/List_of_ISO_3166_country_codes
     *
     * @example FRA
     */
    private ?string $country;

    /**
     * Le nom de la société qui va payer, si ce n’est pas un particulier.
     */
    private ?string $companyName;

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDateOfBirth(): ?\DateTime
    {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth(?\DateTime $dateOfBirth): self
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(?string $zipCode): self
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;

        return $this;
    }
}
