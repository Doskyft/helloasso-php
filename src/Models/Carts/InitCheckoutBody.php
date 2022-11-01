<?php

namespace Helloasso\Models\Carts;

use Helloasso\Exception\InvalidValueException;
use Helloasso\Models\HelloassoObject;

class InitCheckoutBody implements HelloassoObject
{
    /**
     * Montant total (TTC) du paiement en centimes
     * (doit être égal à la somme du montant initial ainsi que des échéances suivantes)
     *
     * @example 1000 (pour : 10.00€)
     */
    private int $totalAmount;

    /**
     * Montant du paiement (TTC) à payer immédiatement
     *
     * @example 1000 (pour : 10.00€)
     */
    private int $initialAmount;

    /**
     * Description de l’achat. Sera affiché à l’avenir dans le back office utilisateur et association
     *
     * @example Maillot, 2 places concert XXX, Renouvellement licence Fédération X* 2021, etc
     */
    private string $itemName;

    /**
     * L'url de retour sur votre site (page précédente) si l'acheteur souhaite modifier son panier avant de payer.
     * Https uniquement.
     *
     * @example https://www.partnertest.com/cancel.php
     */
    private string $backUrl;

    /**
     * L’url de retour en cas d’erreur technique.
     * Https uniquement.
     *
     * @example https://www.partnertest.com/error.php
     */
    private string $errorUrl;

    /**
     * L’url de retour après le paiement (“succeeded” ou “refused”).
     * Https uniquement
     *
     * @example https://www.partnertest.com/return.php
     */
    private string $returnUrl;

    /**
     * Indique si le paiement (ou une partie) est assimilable à un don à l'association.
     * Pour des raisons de conformité, ce paramètre est obligatoire
     */
    private bool $containsDonation = false;

    /**
     * @var array<CheckoutTerm> Tableau contenant les échéances éventuelles
     */
    private ?array $terms;

    /**
     * Informations concernant le payeur
     */
    private ?CheckoutPayer $payer;

    /**
     * @var array<array> Informations partenaire.
     * Ces infos ne seront pas transmises à l’association ou au contributeur.
     * Elles vous seront renvoyées avec la commande ou le paiement lors de la notification,
     * ou quand vous voudrez récupérer le détail du paiement ou de la commande.
     */
    private array $metadata;

    /**
     * Paramètre de tracking Affilae.
     *
     * @example 101
     */
    private ?string $trackingParameter;

    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }

    public function setTotalAmount(int $totalAmount): self
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    public function getInitialAmount(): int
    {
        return $this->initialAmount;
    }

    public function setInitialAmount(int $initialAmount): self
    {
        $this->initialAmount = $initialAmount;

        return $this;
    }

    public function getItemName(): string
    {
        return $this->itemName;
    }

    public function setItemName(string $itemName): self
    {
        $this->itemName = $itemName;

        return $this;
    }

    public function getBackUrl(): string
    {
        return $this->backUrl;
    }

    /**
     * @throws InvalidValueException
     */
    public function setBackUrl(string $backUrl): self
    {
        if (!str_starts_with($backUrl, 'https://')) {
            throw new InvalidValueException('backUrl doit commencé par "https://"');
        }

        $this->backUrl = $backUrl;

        return $this;
    }

    public function getErrorUrl(): string
    {
        return $this->errorUrl;
    }

    /**
     * @throws InvalidValueException
     */
    public function setErrorUrl(string $errorUrl): self
    {
        if (!str_starts_with($errorUrl, 'https://')) {
            throw new InvalidValueException('errorUrl doit commencé par "https://"');
        }

        $this->errorUrl = $errorUrl;

        return $this;
    }

    public function getReturnUrl(): string
    {
        return $this->returnUrl;
    }

    /**
     * @throws InvalidValueException
     */
    public function setReturnUrl(string $returnUrl): self
    {
        if (!str_starts_with($returnUrl, 'https://')) {
            throw new InvalidValueException('returnUrl doit commencé par "https://"');
        }

        $this->returnUrl = $returnUrl;

        return $this;
    }

    public function isContainsDonation(): bool
    {
        return $this->containsDonation;
    }

    public function setContainsDonation(bool $containsDonation): self
    {
        $this->containsDonation = $containsDonation;

        return $this;
    }

    /**
     * @return array<CheckoutTerm>|null
     */
    public function getTerms(): ?array
    {
        return $this->terms;
    }

    public function addTerm(CheckoutTerm $term): self
    {
        $this->terms[] = $term;

        return $this;
    }

    public function getPayer(): ?CheckoutPayer
    {
        return $this->payer;
    }

    public function setPayer(?CheckoutPayer $payer): self
    {
        $this->payer = $payer;

        return $this;
    }

    public function getMetadata(): array
    {
        return $this->metadata;
    }

    public function setMetadata(array $metadata): self
    {
        $this->metadata = $metadata;

        return $this;
    }

    public function getTrackingParameter(): ?string
    {
        return $this->trackingParameter;
    }

    public function setTrackingParameter(string $trackingParameter): self
    {
        $this->trackingParameter = $trackingParameter;

        return $this;
    }
}
