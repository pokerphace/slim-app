<?php declare(strict_types=1);
namespace Pokerphace\App\Module\TechnicalInformation\Fetch\Entrypoint\Http\Rest;

use Jerowork\RouteAttributeProvider\Api\RequestMethod;
use Jerowork\RouteAttributeProvider\Api\Route;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final class Endpoint
{
    #[Route('/v1/technical-information', method: RequestMethod::GET)]
    public function fetch(Request $request, Response $response): Response
    {
        $response->getBody()->write('Just a test calling a class from domain as a dependency');

        return $response;
    }
}