<?php declare(strict_types=1);

namespace App\Service\Bingo;

use App\Entity\Bingo;
use App\Entity\BingoId;
use App\Entity\Box;
use App\Entity\BoxId;

final class BingoCreateService
{
    const DEFAULT_FONT_COLOR = '000000';
    const DEFAULT_BACKGROUND_COLOR = 'FFFFFF';
    const DEFAULT_PICTURE = null;
    const DEFAULT_NUMBER_OF_BOXES = 24;

    public function execute(BingoCreateInput $input): Bingo
    {
        $bingo = new Bingo(
            BingoId::generate(), // Uuid(null), | $this->bingoRepository->nextIdentity();
            $input->userId(),
            $input->title(),
            self::DEFAULT_FONT_COLOR,
            self::DEFAULT_BACKGROUND_COLOR,
            self::DEFAULT_PICTURE
        );

        for ($i=0; $i < self::DEFAULT_NUMBER_OF_BOXES; $i++) {
            $bingo->addBox(new Box(BoxId::generate(), $i, ''));
        }

        return $bingo;
    }
}
