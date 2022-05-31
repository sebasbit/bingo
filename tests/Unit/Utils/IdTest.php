<?php

namespace App\Tests\Unit\Utils;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use App\Utils\Id;

class IdTest extends TestCase
{
    public function test_create_id_with_valid_value()
    {
        $id = new Id('0a9a1533-81f4-4489-b760-5c27ddfb5339');

        $this->assertSame('0a9a1533-81f4-4489-b760-5c27ddfb5339', $id->value());
    }

    public function test_throw_exception_when_value_is_invalid()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('"(._.;)" is not a valid value');

        $id = new Id('(._.;)');
    }

    public function test_generate_id_with_random_value()
    {
        $id = Id::generate();

        $this->assertInstanceOf(Id::class, $id);
    }

    public function test_return_true_if_id_are_equal_or_false_otherwise()
    {
        $id = new Id('0a9a1533-81f4-4489-b760-5c27ddfb5339');
        $same = new Id('0a9a1533-81f4-4489-b760-5c27ddfb5339');
        $diff = new Id('1a0abbb5-1c6e-4c46-8e66-31046c4203dc');

        $this->assertTrue($id->equals($same));
        $this->assertFalse($id->equals($diff));
    }
}
