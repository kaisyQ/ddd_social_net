<?php

declare(strict_types=1);

namespace App\Domain\ValueObject;

class Password
{
    private string $value;
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
