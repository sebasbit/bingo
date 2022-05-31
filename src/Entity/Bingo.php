<?php declare(strict_types=1);

namespace App\Entity;

class Bingo
{
    private BingoId $id;
    private UserId $userId;
    private string $title;
    private string $fontColor;
    private string $backgoundColor;
    private ?string $picture;
    private array $boxes;

    public function __construct(BingoId $id, UserId $userId, string $title, string $fontColor, string $backgoundColor, ?string $picture)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->title = $title;
        $this->fontColor = $fontColor;
        $this->backgoundColor = $backgoundColor;
        $this->picture = $picture;
        $this->boxes = [];
    }

    public function id(): BingoId
    {
        return $this->id;
    }

    public function userId(): UserId
    {
        return $this->userId;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function fontColor(): string
    {
        return $this->fontColor;
    }

    public function backgoundColor(): string
    {
        return $this->backgoundColor;
    }

    public function picture(): ?string
    {
        return $this->picture;
    }

    public function boxes(): array
    {
        return $this->boxes;
    }

    public function addBox(Box $box): void
    {
        $this->boxes[] = $box;
    }
}
