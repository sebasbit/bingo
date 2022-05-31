<?php declare(strict_types=1);

namespace App\Service\Bingo;

use App\Entity\Bingo;
use App\Entity\Box;

final class BingoCreateService
{
    const DEFAULT_FONT_COLOR = '000000';
    const DEFAULT_BACKGROUND_COLOR = 'FFFFFF';
    const DEFAULT_PICTURE = null;

    public function execute(BingoCreateInput $input): Bingo
    {
        $bingo = new Bingo(
            $input->userId(),
            $input->title(),
            self::DEFAULT_FONT_COLOR,
            self::DEFAULT_BACKGROUND_COLOR,
            self::DEFAULT_PICTURE
        );

        for ($i=0; $i < 24; $i++) {
            $bingo->addBox(new Box($i, ''));
        }

        return $bingo;
    }
}
