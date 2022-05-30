<?php declare(strict_types=1);

namespace App\Entity;

final class Box
{
    private int $order;
    private string $content;

    public function __construct(int $order, string $content)
    {
        $this->order = $order;
        $this->content = $content;
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
