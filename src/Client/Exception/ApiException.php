<?php

namespace Bread\Ory\Bundle\Client\Exception;

/**
 * Thrown when an API call fails with a non-2xx response.
 */
class ApiException extends \RuntimeException implements OryExceptionInterface
{
    private ?int $statusCode;
    private ?array $errorResponse;

    public function __construct(
        string $message,
        int $code = 0,
        ?\Throwable $previous = null,
        ?int $statusCode = null,
        ?array $errorResponse = null
    ) {
        parent::__construct($message, $code, $previous);
        $this->statusCode = $statusCode;
        $this->errorResponse = $errorResponse;
    }

    public function getStatusCode(): ?int
    {
        return $this->statusCode;
    }

    public function getErrorResponse(): ?array
    {
        return $this->errorResponse;
    }
}
