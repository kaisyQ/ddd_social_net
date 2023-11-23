<?php

declare(strict_types=1);

namespace App\Domain\Entity;

use App\Domain\ValueObject\Date;
use App\Domain\ValueObject\Id;
use App\Domain\ValueObject\LikeCount;
use App\Domain\ValueObject\Text;

class Post
{
    private Id $id;
    private Text $text;
    private Date $date;
    private LikeCount $likeCount;
    public function __construct(Id $id, Text $text, Date $date, LikeCount $likeCount)
    {
        $this->id = $id;
        $this->text = $text;
        $this->date = $date;
        $this->likeCount = $likeCount;
    }
    
    public function getText(): Text
    {
        return $this->text;
    }
 
    public function setText($text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getId(): Id
    {
        return $this->id;
    }
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }
    public function getLikeCount(): LikeCount
    {
        return $this->likeCount;
    }

    public function setLikeCount($likeCount): self
    {
        $this->likeCount = $likeCount;

        return $this;
    }
    public function getDate(): Date
    {
        return $this->date;
    }

    public function setDate($date): self
    {
        $this->date = $date;

        return $this;
    }
}
