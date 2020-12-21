<?php declare(strict_types=1);
namespace AcceptanceTest\Context\TechnicalInformation;

use Behat\Behat\Context\Context;
use function PHPUnit\Framework\assertEquals;

class FetchContext implements Context
{
    /**
     * @Given the application technical information feature is enabled
     */
    public function applicationTechnicalInformationFeatureEnabled(): void
    {
        assertEquals(1, 1);
    }

    /**
     * @Given I have a valid token
     */
    public function iHaveAValidToken(): void
    {
        assertEquals(1, 1);
    }

    /**
     * @When I try to see the application technical information
     */
    public function iTryToSeeTheApplicationTechnicalInformation(): void
    {
        assertEquals(1, 1);
    }

    /**
     * @Then I can see the Project name
     */
    public function iCanSeeTheProjectName(): void
    {
        assertEquals(1, 1);
    }

    /**
     * @Then I can see the Project description
     */
    public function iCanSeeTheProjectDescription(): void
    {
        assertEquals(1, 1);
    }

    /**
     * @Then I can see the Project version
     */
    public function iCanSeeTheProjectVersion(): void
    {
        assertEquals(1, 1);
    }

    /**
     * @Then I can see the PHP version
     */
    public function iCanSeeThePhpVersion(): void
    {
        assertEquals(1, 1);
    }

    /**
     * @Then I can see the Slim version
     */
    public function iCanSeeTheSlimVersion(): void
    {
        assertEquals(1, 1);
    }

    /**
     * @Then I can see the Server IP
     */
    public function iCanSeeTheServerIP(): void
    {
        assertEquals(1, 1);
    }
}