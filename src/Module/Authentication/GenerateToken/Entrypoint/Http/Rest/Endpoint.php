<?php declare(strict_types=1);
namespace App\Module\Authentication\GenerateToken\Entrypoint\Http\Rest;

use Jerowork\RouteAttributeProvider\Api\RequestMethod;
use Jerowork\RouteAttributeProvider\Api\Route;
use Pokerphace\Domain\Number as DomainNumber;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final class Endpoint
{
    private float $number;

    public function __construct(DomainNumber $numberObj)
    {
        $this->number = $numberObj->getNumber();
    }

    #[Route('/v1/auth/generate-token', method: RequestMethod::GET)]
    public function generateToken(Request $request, Response $response): Response
    {
        $response->getBody()->write('Just a test calling a class from domain as a dependency' . $this->number);

        return $response;
    }
}