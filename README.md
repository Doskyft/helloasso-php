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