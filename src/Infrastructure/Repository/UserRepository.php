<?php

declare(strict_types=1);

namespace App\Infrastructure\Repository;

use App\Domain\RepositoryInterface\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function findAll(): array
    {
        return [];
    }
}
