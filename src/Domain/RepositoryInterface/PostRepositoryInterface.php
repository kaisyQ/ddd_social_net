<?php

declare(strict_types=1);

namespace App\Domain\RepositoryInterface;

use App\Domain\Entity\Post;

interface PostRepositoryInterface
{
    /**
     * @return Post[]
     */
    public function findAllPosts (): array;
}
