<?php

declare(strict_types=1);

namespace Bread\Ory\Bundle\Client;

use Bread\Ory\Bundle\Client\Exception\OryExceptionInterface;

interface OryClientInterface
{
    /**
     * Sends a request to the Ory API.
     *
     * @param string $method HTTP method (GET, POST, PUT, DELETE, etc.)
     * @param string $uri    API endpoint (e.g. '/admin/identities')
     * @param array<string, mixed> $options Request options:
     *                                      - 'body' => array|string
     *                                      - 'query' => array
     *                                      - 'headers' => array
     *
     * @return array<string, mixed> The decoded JSON response.
     *
     * @throws OryExceptionInterface On any API error.
     */
    public function request(string $method, string $uri, array $options = []): array;

    /**
     * Returns the base URL of the Ory instance.
     */
    public function getBaseUrl(): string;

    /**
     * Returns the current configuration (e.g. for debugging).
     *
     * @return array<string, mixed>
     */
    public function getConfig(): array;
}
