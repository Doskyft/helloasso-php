<?php

declare(strict_types=1);

namespace Helloasso\Tests\Functional\Service;

use Helloasso\Enums\PaymentState;
use Helloasso\Models\Payments\Refund;
use Helloasso\Models\Payments\RefundState;
use Helloasso\Models\Statistics\Payment;
use Helloasso\Models\Statistics\PaymentCollection;
use Helloasso\Tests\Functional\FunctionalTestCase;

final class PaymentServiceTest extends FunctionalTestCase
{
    public function testAll(): void
    {
        $paymentCollection = $this->getClient()->payment->all();
        self::assertInstanceOf(PaymentCollection::class, $paymentCollection);

        if ($paymentCollection->isEmpty()) {
            self::markTestSkipped('No payment fund in collection');
        }

        $paymentId = $paymentCollection->getData()[0]->getId();
        $client = $this->getClient();

        $payment = $client->payment->retrieve($paymentId);
        self::assertInstanceOf(Payment::class, $payment);
        self::assertSame($paymentId, $payment->getId());

        if ('helloasso-php-sdk' === $this->getOrganisationSlug()) {
            self::markTestSkipped('Refund test is disable for now as it requires special permissions, even on sandbox environment.');
        }

        if (null === $refundablePayment = $this->getRefundablePayment($paymentCollection)) {
            self::markTestSkipped('No refundable payment found in collection');
        }

        $refund = $client->payment->refund($refundablePayment->getId(), ['comment' => 'Refunded from functional test']);
        self::assertInstanceOf(Refund::class, $refund);
        self::assertSame(RefundState::Init, $refund->state);
    }

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
