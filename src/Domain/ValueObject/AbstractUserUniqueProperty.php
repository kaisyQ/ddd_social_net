<?php

declare(strict_types=1);

namespace App\Domain\ValueObject;

abstract class AbstractUserUniqueProperty
{
    private string $value;

    public function __construct(string $value)
	{
        $this->validateValue($value);

        $this->value = $value;

	}
	
    public function getValue(): string
    {
        return $this->value;
    }

    public abstract function validateValue(string $value);
}
