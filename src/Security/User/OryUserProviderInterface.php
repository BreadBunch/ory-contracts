<?php

namespace Bread\Ory\Contracts\Security\User;

use Ory\Client\Model\Identity;
use Symfony\Component\Security\Core\User\UserProviderInterface;

interface OryUserProviderInterface extends UserProviderInterface
{
    public function convertIdentity(Identity $identity): OryUserInterface;
}
