<?php

namespace App\Tests\Unit\Service\Bingo;

use PHPUnit\Framework\TestCase;
use App\Entity\BingoId;
use App\Entity\BoxId;
use App\Service\Bingo\BingoCreateInput;
use App\Service\Bingo\BingoCreateService;

class BingoCreateServiceTest extends TestCase
{
    public function test_return_a_bingo_with_an_id()
    {
        $input = new BingoCreateInput(1, 'bingo-bongo');
        $bingoCreateService = new BingoCreateService();

        $bingo = $bingoCreateService->execute($input);

        $this->assertInstanceOf(BingoId::class, $bingo->id());
    }

    public function test_return_a_bingo_with_the_values_passed_by_parameter()
    {
        $input = new BingoCreateInput(1, 'bingo-bongo');
        $bingoCreateService = new BingoCreateService();

        $bingo = $bingoCreateService->execute($input);

        $this->assertSame($input->userId(), $bingo->userId());
        $this->assertSame($input->title(), $bingo->title());
    }

    public function test_return_a_bingo_with_default_values()
    {
        $input = new BingoCreateInput(1, 'bingo-bongo');
        $bingoCreateService = new BingoCreateService();

        $bingo = $bingoCreateService->execute($input);

        $this->assertSame('000000', $bingo->fontColor());
        $this->assertSame('FFFFFF', $bingo->backgoundColor());
        $this->assertNull($bingo->picture());
    }

    public function test_return_a_bingo_with_24_empty_boxes()
    {
        $input = new BingoCreateInput(1, 'bingo-bongo');
        $bingoCreateService = new BingoCreateService();

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
}
