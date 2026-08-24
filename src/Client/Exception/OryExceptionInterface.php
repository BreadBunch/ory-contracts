<?php

namespace Bread\Ory\Bundle\Client\Exception;

/**
 * Base interface for all exceptions thrown by Ory contracts.
 */
interface OryExceptionInterface extends \Throwable
{
    /**
     * Returns the HTTP status code if available.
     */
    public function getStatusCode(): ?int;

    /**
     * Returns the raw error response from the Ory API if available.
     *
     * @return array<string, mixed>|null
     */
    public function getErrorResponse(): ?array;
}
