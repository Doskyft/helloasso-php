<?php

declare(strict_types=1);

namespace Helloasso\Tests\Functional\Service;

use Helloasso\Models\Carts\CheckoutPayer;
use Helloasso\Models\Carts\InitCheckoutBody;
use Helloasso\Models\Carts\InitCheckoutResponse;
use Helloasso\Service\CheckoutIntentService;

final class CheckoutIntentServiceTest extends ServiceTestCase
{
    public function testCreate(): void
    {
        $service = $this->createService(CheckoutIntentService::class);

        $payer = new CheckoutPayer();
        $payer
            ->setFirstName('Greta')
            ->setLastName('Thunberg')
            ->setDateOfBirth(new \DateTimeImmutable('-20 years'))
        ;

        $body = new InitCheckoutBody();
        $body
            ->setItemName('Awesome product')
            ->setInitialAmount(4200)
            ->setTotalAmount(4200)
            ->setBackUrl('https://my-app.fr/back_url')
            ->setReturnUrl('https://my-app.fr/return_url')
            ->setErrorUrl('https://my-app.fr/error_url')
            ->setPayer($payer)
        ;

        $response = $service->create($body);

        $this->assertInstanceOf(InitCheckoutResponse::class, $response);
    }
}
