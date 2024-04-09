# helloasso-php (Unofficial) (en cours de dev)

Un sdk pour utiliser l'api d'helloasso

## Installation

```bash
composer require doskyft/helloasso-php
```

## Utilisation

Pour commencer, il faut créer une instance de `HelloassoClient`.

```php
use Helloasso\HelloassoClientFactory;

$helloassoClient = HelloassoClientFactory::create(
    'hello_asso_id',
    'hello_asso_secret',
    'hello_asso_organization_slug',
    true # sandbox
);
```

Maintenant, on peut commencer à utiliser le client

### CheckoutIntent

<details>

<summary>Créer un CheckoutIntent</summary>

```php
use Helloasso\Models\Carts\CheckoutPayer;
use Helloasso\Models\Carts\InitCheckoutBody;

$checkoutIntent = (new InitCheckoutBody())
    ->setTotalAmount(1000)
    ->setInitialAmount(1000)
    ->setItemName('Un produit')
    ->setBackUrl('https://localhost/back')
    ->setErrorUrl('https://localhost/error')
    ->setReturnUrl('https://localhost/return')
    ->setPayer((new CheckoutPayer())
        ->setFirstName()
        ->setLastName()
        ->setEmail()
    )
    ->setMetadata([
        '' => '',
    ])
;

$helloassoClient->checkout->create($checkoutIntent);
```
[Voir la documentation](https://api.helloasso.com/v5/swagger/ui/index#/Checkout%20intents%20management/OrganizationCheckoutIntents_PostInitCheckout)
</details>

### Évènements

<details>

<summary></summary>

```php
use Helloasso\Models\Event;

$event = $helloassoClient->decodeEvent($rawEventReceivedFromHelloasso); // Returns an instance of Event
```
</details>

## Contribuer

Ce projet inclut des tests fonctionnels qui nécessitent un accès à [la sandbox d'Helloasso](https://www.helloasso-sandbox.com/).

Pour lancer les tests :

    HELLOASSO_CLIENT_ID=[YourClientId] HELLOASSO_CLIENT_SECRET=[YourClientSecret] HELLOASSO_ORGANISATION_SLUG=[YourOrganisation] vendor/bin/phpunit

## Contributeurs

<table>
<tr>
    <td align="center" style="word-wrap: break-word; width: 150.0; height: 150.0">
        <a href="https://github.com/doskyft">
            <img
                src="https://avatars.githubusercontent.com/u/8113527?v=4"
                width="100"
                style="border-radius:50%;align-items:center;justify-content:center;overflow:hidden;padding-top:10px"
                alt="Damien Hebert"
            />
            <br />
            <sub style="font-size:14px"><b>Damien Hebert</b></sub>
        </a>
    </td>
    <td align="center" style="word-wrap: break-word; width: 150.0; height: 150.0">
        <a href="https://github.com/odolbeau">
            <img
                src="https://avatars.githubusercontent.com/u/680206?v=4"
                width="100"
                style="border-radius:50%;align-items:center;justify-content:center;overflow:hidden;padding-top:10px"
                alt="Olivier Dolbeau"
            />
            <br />
            <sub style="font-size:14px"><b>Olivier Dolbeau</b></sub>
        </a>
    </td>
</tr>
</table>
