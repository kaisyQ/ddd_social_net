<?php

declare(strict_types=1);

namespace App\Domain\ValueObject;

class Username
{
    private string $firstname;
    private string $lastname;

    public function __construct(string $firstname, string $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }
}
