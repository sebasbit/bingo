<?php declare(strict_types=1);

namespace App\Entity;

final class BingoId
{
    private string $value;

    public function __construct(?string $value = null)
    {
        $this->value = $value ?? '...';
    }

    public function value(): string
    {
        return $this->value;
    }

    public function eq(BingoId $comparabable)
    {
        return $this->value() === $comparabable->value();
    }
}
