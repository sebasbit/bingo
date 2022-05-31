<?php declare(strict_types=1);

namespace App\Service\Bingo;

class BingoCreateInput
{
    private string $userId;
    private string $title;

    public function __construct(string $userId, string $title)
    {
        $this->userId = $userId;
        $this->title = $title;
    }

    public function userId(): string
    {
        return $this->userId;
    }

    public function title(): string
    {
        return $this->title;
    }
}
