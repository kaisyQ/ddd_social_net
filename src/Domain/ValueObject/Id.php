<?php

declare(strict_types=1);

namespace App\Domain\ValueObject;

use Ramsey\Uuid\Uuid;

class Id
{
    private string $id;

    public function __construct()
    {
        $this->id = Uuid::uuid4();
    }

    public function getId(): string
    {
        return $this->id;
    }
}
