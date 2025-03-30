<?php

declare(strict_types=1);

namespace Helloasso\Tests\Functional\Service;

use Helloasso\Models\Carts\CheckoutIntentResponse;
use Helloasso\Models\Carts\CheckoutPayer;
use Helloasso\Models\Carts\CheckoutTerm;
use Helloasso\Models\Carts\InitCheckoutBody;
use Helloasso\Models\Carts\InitCheckoutResponse;
use Helloasso\Tests\Functional\FunctionalTestCase;

final class CheckoutIntentServiceTest extends FunctionalTestCase
{
    public function testCreateAndRetrieve(): void
    {
        $payer = new CheckoutPayer();
        $payer
            ->setFirstName('Greta')
            ->setLastName('Thunberg')
            ->setDateOfBirth(new \DateTimeImmutable('-20 years'))
        ;

        $firstTermDate = new \DateTimeImmutable('+2 months');
        $firstTermDate = $firstTermDate->setDate((int) $firstTermDate->format('Y'), (int) $firstTermDate->format('m'), 1);

        $body = new InitCheckoutBody();
        $body
            ->setItemName('Awesome product')
            ->setInitialAmount(1200)
            ->setTotalAmount(4200)
            ->setBackUrl('https://my-app.fr/back_url')
            ->setReturnUrl('https://my-app.fr/return_url')
            ->setErrorUrl('https://my-app.fr/error_url')
            ->setPayer($payer)
            ->addTerm(new CheckoutTerm(1000, $firstTermDate))
            ->addTerm(new CheckoutTerm(1000, $firstTermDate->modify('+1 month')))
            ->addTerm(new CheckoutTerm(1000, $firstTermDate->modify('+2 months')))
        ;

        $client = $this->getClient();

        $response = $client->checkout->create($body);
        self::assertInstanceOf(InitCheckoutResponse::class, $response);

        $response = $client->checkout->retrieve($response->getId());
        self::assertInstanceOf(CheckoutIntentResponse::class, $response);
    }
}
