<?php

declare(strict_types=1);

namespace App\Infrastructure\Repository;

use App\Domain\RepositoryInterface\PostRepositoryInterface;
use App\Infrastructure\DoctrineEntity\DoctrinePost;
use App\Infrastructure\Mapper\PostMapper;
use App\Domain\Entity\Post;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

class PostRepository extends ServiceEntityRepository implements PostRepositoryInterface
{
    public function __construct(ManagerRegistry $registry, private EntityManagerInterface $em)
    {
        parent::__construct($registry, DoctrinePost::class);
    }

    /**
     * @return Post[]
     */
    public function findAllPosts(): array
    {
        $posts = $this->findAll();

        return array_map(fn ($post) => PostMapper::fromDoctrinePost($post), $posts);
    }
}
