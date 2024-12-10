<?php

declare(strict_types=1);

namespace Helloasso\Http;

use Helloasso\Exception\HelloassoApiException;
use Helloasso\Models\HelloassoObject;
use Symfony\Component\Serializer\Serializer;
use Symfony\Contracts\HttpClient\Exception\HttpExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

class ResponseHandler
{
    public function __construct(
        private readonly Serializer $serializer,
    ) {
    }

    /**
     * @template T of HelloassoObject
     *
     * @param class-string<T> $responseClassType
     *
     * @return T
     *
     * @throws HelloassoApiException
     */
    public function deserializeResponse(ResponseInterface $response, string $responseClassType): HelloassoObject
    {
        try {
            $responseContent = $response->getContent();
        } catch (HttpExceptionInterface|TransportExceptionInterface $e) {
            try {
                $content = $response->getContent(false);
            } catch (HttpExceptionInterface|TransportExceptionInterface $e) {
                $content = 'unknown error';
            }

            throw new HelloassoApiException($e->getMessage().' : '.$content);
        }

        return $this->deserializeResponseContent($responseContent, $responseClassType);
    }

    /**
     * @template T of HelloassoObject
     *
     * @param class-string<T> $responseClassType
     *
     * @return T
     */
    public function deserializeResponseContent(string $content, string $responseClassType): HelloassoObject
    {
        /** @var T $object */
        $object = $this->serializer->deserialize($content, $responseClassType, 'json');

        return $object;
    }
}
