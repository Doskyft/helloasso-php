<?php

declare(strict_types=1);

namespace Helloasso\Service;

use Helloasso\Exception\HelloassoApiException;
use Helloasso\Object\CheckoutIntent;
use Helloasso\Object\CheckoutIntentResponse;
use Symfony\Component\HttpFoundation\Request;

class CheckoutIntentService extends ApiRequest
{
    public const CREATE_ENDPOINT = '/v5/organizations/%s/checkout-intents';
    public const RETRIEVE_ENDPOINT = '/v5/organizations/%s/checkout-intents/%d';

    /**
     * @throws HelloassoApiException
     */
    public function create(CheckoutIntent $checkoutIntent): CheckoutIntentResponse
    {
        $params = [
            'auth_bearer' => $this->oauth()->getAccessToken(),
            'body' => $this->serialize($checkoutIntent),
            'headers' => [
                'Content-type: application/json',
            ],
        ];

        $request = $this->request(
            Request::METHOD_POST,
            self::BASE_URL . sprintf(self::CREATE_ENDPOINT, $this->organizationSlug),
            $params
        );

        /** @var CheckoutIntentResponse $content */
        $content = $this->deserialize($this->getContent($request), CheckoutIntentResponse::class);

        return $content;
    }

    /**
     * @throws HelloassoApiException
     */
    public function retrieve(int $checkoutIntentId): CheckoutIntentResponse
    {
        $request = $this->request(
            Request::METHOD_GET,
            self::BASE_URL . sprintf(self::RETRIEVE_ENDPOINT, $this->organizationSlug, $checkoutIntentId)
        );

        /** @var CheckoutIntentResponse $content */
        $content = $this->deserialize($this->getContent($request), CheckoutIntentResponse::class);

        return $content;
    }
}