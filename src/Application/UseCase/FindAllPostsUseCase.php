<?php

declare(strict_types=1);

namespace App\Application\UseCase;

use App\Application\UseCaseInterface\FindAllPostsUseCaseInterface;
use App\Domain\Entity\Post;
use App\Infrastructure\Repository\PostRepository;

class FindAllPostsUseCase implements FindAllPostsUseCaseInterface
{
    public function __construct(private PostRepository $postRepository)
    {
    }

    /**
     * @return Post[]
     */
    public function execute(): array
    {
        return $this->postRepository->findAllPosts();
    }
}
