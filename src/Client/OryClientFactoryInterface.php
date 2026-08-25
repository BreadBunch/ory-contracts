<?php

namespace BB\Ory\Contracts\Client;

use Ory\Client\Api\FrontendApi;
use Ory\Client\Api\IdentityApi;
use Ory\Client\Configuration;

interface OryClientFactoryInterface
{
    public function getConfiguration(): Configuration;

    public function createFrontendApi(): FrontendApi;

    public function createIdentityApi(): IdentityApi;
}
