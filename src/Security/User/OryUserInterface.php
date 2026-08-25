<?php

namespace Bread\Ory\Contracts\Security\User;

use Symfony\Component\Security\Core\User\UserInterface;

interface OryUserInterface extends UserInterface
{
    public function getOryId(): string;

    public function getTraits(): array;
}
