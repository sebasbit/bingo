<?php declare(strict_types=1);

namespace App\Service\Bingo;

use App\Entity\Bingo;
use App\Entity\Box;

final class BingoCreateService
{
    public function execute(BingoCreateInput $input): Bingo
    {
        $bingo = new Bingo($input->userId(), $input->title(), '000000', 'FFFFFF', null);

        for ($i=0; $i < 24; $i++) {
            $bingo->addBox(new Box($i, ''));
        }

        return $bingo;
    }
}
