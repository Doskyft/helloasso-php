<?php

declare(strict_types=1);

namespace Helloasso\Tests\Functional\Service;

use Helloasso\Enums\PaymentState;
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
            $this->markTestSkipped('No payment fund in collection');
        }

        $paymentId = $paymentCollection->getData()[0]->getId();

        $payment = $this->getClient()->payment->retrieve($paymentId);
        $this->assertInstanceOf(Payment::class, $payment);
        $this->assertSame($paymentId, $payment->getId());

        $this->markTestSkipped('Refund test is disable for now as it requires special permissions, even on sandbox environment.');

        /* @phpstan-ignore-next-line Ignored due do skipped test */
        if (null === $refundablePayment = $this->getRefundablePayment($paymentCollection)) {
            $this->markTestSkipped('No refundable payment found in collection');
        }

        $payment = $this->getClient()->payment->refund($refundablePayment->getId(), ['comment' => 'Refunded from functional test']);
        $this->assertSame(PaymentState::Refunded, $payment->getState());
    }

    /* @phpstan-ignore-next-line Ignored due do skipped test */
    private function getRefundablePayment(PaymentCollection $paymentCollection): ?Payment
    {
        foreach ($paymentCollection->getData() as $payment) {
            if (PaymentState::Authorized === $payment->getState()) {
                return $payment;
            }
        }

        return null;
    }
}
