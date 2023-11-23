<?php

declare(strict_types=1);

namespace App\Domain\ValueObject;

use DateTimeImmutable;

class Date
{
    private DateTimeImmutable $date;
    public function __construct(DateTimeImmutable $date)
    {
        $this->assertDate($date);

        $this->date = $date;
    }

    private function assertDate(DateTimeImmutable $date)
    {
    
    }

    public function getDate(): DateTimeImmutable
    {
        return $this->date;
    }
}
