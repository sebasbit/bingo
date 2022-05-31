<?php declare(strict_types=1);

namespace App\Repository;

use App\Entity\User;
use App\Entity\UserId;

interface UserRepository
{
    public function findOrFail(UserId $userId): User;
}
