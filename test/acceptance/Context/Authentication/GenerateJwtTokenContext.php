<?php declare(strict_types=1);
namespace AcceptanceTest\Context\Authentication;

use Behat\Behat\Context\Context;
use function PHPUnit\Framework\assertEquals;

class GenerateJwtTokenContext implements Context
{
    /**
     * @Given I have done something with :arg1
     *
     * @param string $arg1
     */
    public function iHaveDoneSomethingWith(string $arg1): void
    {
        assertEquals('dada', $arg1);
    }
}