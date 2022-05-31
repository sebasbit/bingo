<?php declare(strict_types=1);

namespace App\Utils;

use InvalidArgumentException;
use Ramsey\Uuid\Uuid;

class Id
{
    private string $value;

    public function __construct(string $value)
    {
        if (! $this->isValid($value)) {
            throw new InvalidArgumentException(sprintf('"%s" is not a valid value', $value));
        }

        $this->value = $value;
    }

    /** @return static */
    public static function generate()
    {
        return new static(Uuid::uuid4()->toString());
    }

    public function isValid(string $value): bool
    {
        return Uuid::isValid($value);
    }

    public function value(): string
    {
        return $this->value;
    }

    public function equals(Id $id): bool
    {
        return $this->value() === $id->value();
    }
}