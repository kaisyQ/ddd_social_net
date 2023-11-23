<?php

declare(strict_types=1);

namespace App\Infrastructure\Mapper;

use App\Domain\ValueObject\Id;
use App\Domain\ValueObject\LikeCount;
use App\Infrastructure\DoctrineEntity\DoctrinePost;
use App\Domain\Entity\Post;
use App\Domain\ValueObject\Date;
use App\Domain\ValueObject\Text;

class PostMapper
{
    static function fromDoctrinePost(DoctrinePost $doctrinePost)
    {
        return new Post(
            new Id($doctrinePost->getId()),
            new Text($doctrinePost->getText()),
            new Date($doctrinePost->getCreatedAt()),
            new LikeCount($doctrinePost->getLikeCount()),
        );
    }
}
