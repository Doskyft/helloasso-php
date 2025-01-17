<?php

declare(strict_types=1);

namespace Helloasso\Tests\Unit;

use Helloasso\HelloassoClient;
use Helloasso\HelloassoClientFactory;
use Helloasso\Models\Event;
use Helloasso\Models\Forms\FormPublicModel;
use Helloasso\Models\Statistics\OrderDetail;
use Helloasso\Models\Statistics\PaymentDetail;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\MockHttpClient;

final class HelloAssoClientTest extends TestCase
{
    private HelloassoClient $client;

    protected function setUp(): void
    {
        $this->client = HelloassoClientFactory::create('clientId', 'clientSecret', 'organisationSlug', true, new MockHttpClient());
    }

    public function testDecodeOrderEvent(): void
    {
        if (false === $fileContent = file_get_contents(__DIR__.'/../fixtures/event.Order.json')) {
            $this->fail('Unable to read content from given file');
        }

        $event = $this->client->decodeEvent($fileContent);

        $this->assertInstanceOf(Event::class, $event);
        $this->assertSame('Order', $event->getEventType());
        $this->assertInstanceOf(OrderDetail::class, $event->getData());
    }

    public function testDecodePaymentEvent(): void
    {
        if (false === $fileContent = file_get_contents(__DIR__.'/../fixtures/event.Payment.json')) {
            $this->fail('Unable to read content from given file');
        }

        $event = $this->client->decodeEvent($fileContent);

        $this->assertInstanceOf(Event::class, $event);
        $this->assertSame('Payment', $event->getEventType());
        $this->assertInstanceOf(PaymentDetail::class, $event->getData());
    }

    public function testDecodeFormEvent(): void
    {
        if (false === $fileContent = file_get_contents(__DIR__.'/../fixtures/event.Form.json')) {
            $this->fail('Unable to read content from given file');
        }

        $event = $this->client->decodeEvent($fileContent);

        $this->assertInstanceOf(Event::class, $event);
        $this->assertSame('Form', $event->getEventType());
        $this->assertInstanceOf(FormPublicModel::class, $event->getData());
    }
}
