<?php

declare(strict_types=1);

namespace Helloasso\Tests\Functional\Service;

use Helloasso\Models\Statistics\Payment;
use Helloasso\Models\Statistics\PaymentCollection;
use Helloasso\Tests\Functional\FunctionalTestCase;

final class PaymentServiceTest extends FunctionalTestCase
{
    public function testAll(): void
    {
        $paymentCollection = $this->getClient()->payment->all();
        $this->assertInstanceOf(PaymentCollection::class, $paymentCollection);

        if ($paymentCollection->isEmpty()) {
            $this->markTestSkipped();
        }

        $paymentId = $paymentCollection->getData()[0]->getId();

        $payment = $this->getClient()->payment->retrieve($paymentId);
        $this->assertInstanceOf(Payment::class, $payment);
        $this->assertSame($paymentId, $payment->getId());
    }
}
