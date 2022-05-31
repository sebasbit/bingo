<?php declare(strict_types=1);

namespace App\Entity;

class Box
{
    private BoxId $id;
    private BingoId $bingoId;
    private int $order;
    private string $content;

    public function __construct(BoxId $id, BingoId $bingoId, int $order, string $content)
    {
        $this->id = $id;
        $this->bingoId = $bingoId;
        $this->order = $order;
        $this->content = $content;
    }

    public function id(): BoxId
    {
        return $this->id;
    }

    public function bingoId(): BingoId
    {
        return $this->bingoId;
    }

    public function order(): int
    {
        return $this->order;
    }

    public function content(): string
    {
        return $this->content;
    }
}
