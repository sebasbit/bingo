<?php declare(strict_types=1);

namespace App\Entity;

class Box
{
    private BoxId $id;
    private int $order;
    private string $content;

    public function __construct(BoxId $id, int $order, string $content)
    {
        $this->id = $id;
        $this->order = $order;
        $this->content = $content;
    }

    public function id(): BoxId
    {
        return $this->id;
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
