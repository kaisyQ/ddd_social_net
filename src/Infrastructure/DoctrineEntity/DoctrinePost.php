<?php

declare(strict_types=1);

namespace App\Infrastructure\DoctrineEntity;

use App\Infrastructure\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;
use DateTimeImmutable;
use Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator;


#[ORM\Entity(repositoryClass: PostRepository::class)]
#[ORM\Table(name: "post")]
class DoctrinePost
{

    #[ORM\Id]
    #[ORM\Column(type: Types::GUID)]
    #[ORM\GeneratedValue(strategy: "CUSTOM")]
    #[ORM\CustomIdGenerator(class: UlidGenerator::class)]
    private string $id;

    #[ORM\Column(type: Types::TEXT)]
    private string $text;

    #[ORM\Column(type: Types::DATE_IMMUTABLE)]
    private DateTimeImmutable $createdAt;

    #[ORM\Column(type: Types::INTEGER)]
    private int $likeCount;

    public function __construct()
    {
        $this->createdAt = new DateTimeImmutable();
        $this->likeCount = 0;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getText(): string
    {
        return $this->text;
    }
    public function setText($text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getCreatedAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }
    public function setCreatedAt($createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getLikeCount(): int
    {
        return $this->likeCount;
    }
    public function setLikeCount($likeCount): self
    {
        $this->likeCount = $likeCount;

        return $this;
    }
}
