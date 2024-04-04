<?php

declare(strict_types=1);

namespace Helloasso\Tests\Functional;

use Helloasso\Models\Event;
use Helloasso\Models\Forms\FormPublicModel;
use Helloasso\Models\Statistics\OrderDetail;
use Helloasso\Models\Statistics\PaymentDetail;

final class HelloAssoClientTest extends FunctionalTestCase
{
    public function testDecodeOrderEvent(): void
    {
        $event = $this->getClient()->decodeEvent(file_get_contents(__DIR__.'/../fixtures/event.Order.json'));

        $this->assertInstanceOf(Event::class, $event);
        $this->assertSame('Order', $event->getEventType());
        $this->assertInstanceOf(OrderDetail::class, $event->getData());
    }

    public function testDecodePaymentEvent(): void
    {
        $event = $this->getClient()->decodeEvent(file_get_contents(__DIR__.'/../fixtures/event.Payment.json'));

        $this->assertInstanceOf(Event::class, $event);
        $this->assertSame('Payment', $event->getEventType());
        $this->assertInstanceOf(PaymentDetail::class, $event->getData());
    }

    public function testDecodeFormEvent(): void
    {
        $event = $this->getClient()->decodeEvent(file_get_contents(__DIR__.'/../fixtures/event.Form.json'));

        $this->assertInstanceOf(Event::class, $event);
        $this->assertSame('Form', $event->getEventType());
        $this->assertInstanceOf(FormPublicModel::class, $event->getData());
    }
}
