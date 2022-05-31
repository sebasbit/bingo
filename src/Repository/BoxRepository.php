<?php declare(strict_types=1);

namespace App\Repository;

use App\Entity\BoxId;

interface BoxRepository
{
    public function nextIdentity(): BoxId;
}
