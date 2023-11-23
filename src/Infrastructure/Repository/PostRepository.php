<?php

declare(strict_types=1);

namespace App\Infrastructure\Repository;

use App\Domain\RepositoryInterface\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    public function findAll(): array
    {
        return [];
    }
}
