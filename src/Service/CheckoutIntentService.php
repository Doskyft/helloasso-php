<?php

declare(strict_types=1);

namespace Helloasso\Service;

use Helloasso\Exception\HelloassoApiException;
use Helloasso\Models\Carts\InitCheckoutBody;
use Helloasso\Models\Carts\InitCheckoutResponse;
use Symfony\Component\HttpFoundation\Request;

class CheckoutIntentService extends ApiRequest
{
    public const CREATE_ENDPOINT = '/v5/organizations/%s/checkout-intents';
    public const RETRIEVE_ENDPOINT = '/v5/organizations/%s/checkout-intents/%d';

    /**
     * @throws HelloassoApiException
     */
    public function create(InitCheckoutBody $checkoutIntent): InitCheckoutResponse
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
            $this->getBaseUrl().sprintf(self::CREATE_ENDPOINT, $this->organizationSlug),
            $params
        );

        /** @var InitCheckoutResponse $content */
        $content = $this->deserialize($this->getContent($request), InitCheckoutResponse::class);

        return $content;
    }
}
