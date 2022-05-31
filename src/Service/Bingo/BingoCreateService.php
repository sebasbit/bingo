<?php declare(strict_types=1);

namespace App\Service\Bingo;

use App\Entity\Bingo;
use App\Entity\BingoId;
use App\Entity\Box;
use App\Entity\BoxId;
use App\Entity\UserId;
use App\Repository\UserRepository;

class BingoCreateService
{
    const DEFAULT_FONT_COLOR = '000000';
    const DEFAULT_BACKGROUND_COLOR = 'FFFFFF';
    const DEFAULT_PICTURE = null;
    const DEFAULT_NUMBER_OF_BOXES = 24;

    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function execute(BingoCreateInput $input): Bingo
    {
        $userId = new UserId($input->userId());
        $title = $input->title();

        $user = $this->userRepository->findOrFail($userId);

        $bingo = new Bingo(
            BingoId::generate(), // Uuid(null), | $this->bingoRepository->nextIdentity();
            $userId,
            $title,
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
