# helloasso-php (Unofficial) (en cours de dev)

Un sdk pour utiliser l'api d'helloasso

## Installation

```bash
composer require doskyft/helloasso-php
```

## Utilisation

```php
$helloasso = new HelloassoClient(
    'hello_asso_id',
    'hello_asso_secret',
    'hello_asso_organization_slug',
    true # sandbox
);

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

$helloasso->checkout->create($checkoutIntent);
```

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