<?php declare(strict_types=1);

namespace App\Repository;

use App\Entity\Bingo;
use App\Entity\BingoId;

interface BingoRepository
{
    public function nextIdentity(): BingoId;
    public function save(Bingo $bingo): void;
}
