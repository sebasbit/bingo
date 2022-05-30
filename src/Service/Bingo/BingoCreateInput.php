<?php declare(strict_types=1);

namespace App\Service\Bingo;

final class BingoCreateInput
{
    private int $userId;
    private string $title;

    public function __construct(int $userId, string $title)
    {
        $this->userId = $userId;
        $this->title = $title;
    }

    public function userId(): int
    {
        return $this->userId;
    }

    public function title(): string
    {
        return $this->title;
    }
}
