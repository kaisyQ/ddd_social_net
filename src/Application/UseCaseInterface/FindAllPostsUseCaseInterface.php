<?php

declare(strict_types=1);

namespace App\Application\UseCaseInterface;

use App\Domain\Entity\Post;
interface FindAllPostsUseCaseInterface
{
    /**
     * @return Post[]
     */
    public function execute(): array;
}
