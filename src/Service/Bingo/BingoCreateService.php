<?php declare(strict_types=1);

namespace App\Service\Bingo;

use App\Entity\Bingo;
use App\Entity\Box;
use App\Entity\UserId;
use App\Repository\BingoRepository;
use App\Repository\BoxRepository;

class BingoCreateService
{
    const DEFAULT_FONT_COLOR = '000000';
    const DEFAULT_BACKGROUND_COLOR = 'FFFFFF';
    const DEFAULT_PICTURE = null;
    const DEFAULT_NUMBER_OF_BOXES = 24;

    private BingoRepository $bingoRepository;
    private BoxRepository $boxRepository;

    public function __construct(BingoRepository $bingoRepository, BoxRepository $boxRepository)
    {
        $this->bingoRepository = $bingoRepository;
        $this->boxRepository = $boxRepository;
    }

    public function execute(BingoCreateInput $input): Bingo
    {
        $userId = new UserId($input->userId());
        $title = $input->title();

        $bingo = new Bingo(
            $this->bingoRepository->nextIdentity(),
            $userId,
            $title,
            self::DEFAULT_FONT_COLOR,
            self::DEFAULT_BACKGROUND_COLOR,
            self::DEFAULT_PICTURE
        );

        for ($i=0; $i < self::DEFAULT_NUMBER_OF_BOXES; $i++) {
            $box = new Box(
                $this->boxRepository->nextIdentity(),
                $bingo->id(),
                $i,
                ''
            );

            $bingo->addBox($box);
        }

        $this->bingoRepository->save($bingo);

        return $bingo;
    }
}
