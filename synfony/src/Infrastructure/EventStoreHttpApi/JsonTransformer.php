<?php
declare(strict_types=1);

namespace App\Infrastructure\EventStoreHttpApi;

use Prooph\EventStore\Http\Middleware\Transformer;
use Psr\Http\Message\ResponseInterface;
use Zend\Diactoros\Response\JsonResponse;

/**
 * Class JsonTransformer
 * @package App\Infrastructure\EventStoreHttpApi
 */
final class JsonTransformer implements Transformer
{
    /**
     * @param array $result
     * @return ResponseInterface
     */
    public function createResponse(array $result): ResponseInterface
    {
        return new JsonResponse($result);
    }
}
