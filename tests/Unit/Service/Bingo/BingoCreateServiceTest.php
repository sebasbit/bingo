<?php

namespace App\Tests\Unit\Service\Bingo;

use PHPUnit\Framework\TestCase;
use App\Entity\BingoId;
use App\Entity\BoxId;
use App\Exception\UserNotFoundException;
use App\Repository\UserRepository;
use App\Service\Bingo\BingoCreateInput;
use App\Service\Bingo\BingoCreateService;

class BingoCreateServiceTest extends TestCase
{
    protected function setUp(): void
    {
        $this->userRepositoryMock = $this->createMock(UserRepository::class);
        $this->bingoRepositoryMock = null;
        $this->boxRepositoryMock = null;
    }

    public function test_return_a_bingo_with_an_id()
    {
        $input = new BingoCreateInput('a0fdf8b5-bf34-4ed1-a045-7d0f5324a1cf', 'bingo-bongo');
        $bingoCreateService = new BingoCreateService($this->userRepositoryMock);

        $bingo = $bingoCreateService->execute($input);

        $this->assertInstanceOf(BingoId::class, $bingo->id());
    }

    public function test_return_a_bingo_with_the_values_passed_by_parameter()
    {
        $input = new BingoCreateInput('a0fdf8b5-bf34-4ed1-a045-7d0f5324a1cf', 'bingo-bongo');
        $bingoCreateService = new BingoCreateService($this->userRepositoryMock);

        $bingo = $bingoCreateService->execute($input);

        $this->assertSame($input->userId(), $bingo->userId()->value());
        $this->assertSame($input->title(), $bingo->title());
    }

    public function test_return_a_bingo_with_default_values()
    {
        $input = new BingoCreateInput('a0fdf8b5-bf34-4ed1-a045-7d0f5324a1cf', 'bingo-bongo');
        $bingoCreateService = new BingoCreateService($this->userRepositoryMock);

        $bingo = $bingoCreateService->execute($input);

        $this->assertSame('000000', $bingo->fontColor());
        $this->assertSame('FFFFFF', $bingo->backgoundColor());
        $this->assertNull($bingo->picture());
    }

    public function test_return_a_bingo_with_24_empty_boxes()
    {
        $input = new BingoCreateInput('a0fdf8b5-bf34-4ed1-a045-7d0f5324a1cf', 'bingo-bongo');
        $bingoCreateService = new BingoCreateService($this->userRepositoryMock);

        $bingo = $bingoCreateService->execute($input);
        $boxes = $bingo->boxes();

        $this->assertCount(24, $boxes);

        for ($i = 0; $i < 24; $i++) {
            $box = $boxes[$i];

            $this->assertInstanceOf(BoxId::class, $box->id());
            $this->assertSame($i, $box->order());
            $this->assertSame('', $box->content());
        }
    }

    public function test_throw_exception_if_user_does_not_exist()
    {
        $this->expectException(UserNotFoundException::class);

        $this->userRepositoryMock
                ->method('findOrFail')
                ->will($this->throwException(new UserNotFoundException()));

        $input = new BingoCreateInput('a0fdf8b5-bf34-4ed1-a045-7d0f5324a1cf', 'bingo-bongo');
        $bingoCreateService = new BingoCreateService($this->userRepositoryMock);

        $bingo = $bingoCreateService->execute($input);
    }
}
