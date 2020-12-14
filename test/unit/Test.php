<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Pokerphace\Domain\Number;

class Test extends TestCase
{
    public function testTest(): void
    {
        self::assertEquals(1, (new Number(1))->getNumber());
    }
}