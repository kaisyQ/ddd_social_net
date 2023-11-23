<?php

declare(strict_types=1);

namespace App\Domain\RepositoryInterface;

use App\Domain\Entity\User;

interface UserRepositoryInterface
{
    /**
     * @return User[]
     */
    public function findAll(): array;
}
