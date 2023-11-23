<?php

declare(strict_types=1);

namespace App\Domain\ValueObject;

class Login extends AbstractUserUniqueProperty
{
    public function validateValue(string $value)
    {
    }
}
