<?php

namespace App\Tests\Unit\Service\Bingo;

use PHPUnit\Framework\TestCase;
use App\Service\Bingo\BingoCreateInput;
use App\Service\Bingo\BingoCreateService;

class BingoCreateServiceTest extends TestCase
{
    public function test_return_a_bingo_with_the_title_passed_by_parameter()
    {
        // assign
        $bingoCreateService = new BingoCreateService();
        $bingoCreateInput = new BingoCreateInput(1, 'bingo-bongo');
        // act
        $bingo = $bingoCreateService->execute($bingoCreateInput);
        // asert
        $this->assertSame($bingoCreateInput->title(), $bingo->title());
    }

    public function test_return_a_bingo_with_the_user_passed_by_parameter()
    {
        // assign
        $bingoCreateService = new BingoCreateService();
        $bingoCreateInput = new BingoCreateInput(1, 'bingo-bongo');
        // act
        $bingo = $bingoCreateService->execute($bingoCreateInput);
        // asert
        $this->assertSame($bingoCreateInput->userId(), $bingo->userId());
    }

    public function test_return_a_bingo_with_default_value_to_font_color()
    {
        // assign
        $bingoCreateService = new BingoCreateService();
        $bingoCreateInput = new BingoCreateInput(1, 'bingo-bongo');
        // act
        $bingo = $bingoCreateService->execute($bingoCreateInput);
        // asert
        $this->assertSame('000000', $bingo->fontColor());
    }

    public function test_return_a_bingo_with_default_value_to_backgound_color()
    {
        // assign
        $bingoCreateService = new BingoCreateService();
        $bingoCreateInput = new BingoCreateInput(1, 'bingo-bongo');
        // act
        $bingo = $bingoCreateService->execute($bingoCreateInput);
        // asert
        $this->assertSame('FFFFFF', $bingo->backgoundColor());
    }

    public function test_return_a_bingo_with_default_value_to_picture()
    {
        // assign
        $bingoCreateService = new BingoCreateService();
        $bingoCreateInput = new BingoCreateInput(1, 'bingo-bongo');
        // act
        $bingo = $bingoCreateService->execute($bingoCreateInput);
        // asert
        $this->assertNull($bingo->picture());
    }

    public function test_return_a_bingo_with_24_empty_boxes()
    {
        // assign
        $bingoCreateService = new BingoCreateService();
        $bingoCreateInput = new BingoCreateInput(1, 'bingo-bongo');
        // act
        $bingo = $bingoCreateService->execute($bingoCreateInput);
        $boxes = $bingo->boxes();
        // asert
        $this->assertCount(24, $boxes);

        for ($i = 0; $i < 24; $i++) {
            $box = $boxes[$i];

            $this->assertSame($i, $box->order());
            $this->assertSame('', $box->content());
        }
    }

    public function test_return_a_bingo_with_id()
    {
        // assign
        $bingoCreateService = new BingoCreateService();
        $bingoCreateInput = new BingoCreateInput(1, 'bingo-bongo');
        // act
        $bingo = $bingoCreateService->execute($bingoCreateInput);
        // asert
        $this->assertNotNull($bingo->id());
    }
}
