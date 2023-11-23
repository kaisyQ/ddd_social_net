<?php

declare(strict_types=1);

namespace App\Domain\ValueObject;

use Ramsey\Uuid\Uuid;

class Id
{
    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getId(): string
    {
        return $this->value;
    }
}
