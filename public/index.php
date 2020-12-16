<?php
ini_set('display_errors', 1);

use Jerowork\RouteAttributeProvider\RouteAttributeConfigurator;
use Jerowork\RouteAttributeProvider\Slim\SlimRouteAttributeProvider;
use Slim\Factory\AppFactory;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

require __DIR__ . '/../vendor/autoload.php';

$containerBuilder = new ContainerBuilder();
$loader = new YamlFileLoader($containerBuilder, new FileLocator(__DIR__));
$loader->load('../config/dependency-injection.yml');

$app = AppFactory::createFromContainer($containerBuilder);

$app->addErrorMiddleware(displayErrorDetails: true, logErrors: true, logErrorDetails: true);

$routeConfigurator = new RouteAttributeConfigurator(
    SlimRouteAttributeProvider::createFromApp($app)
);

$routeConfigurator
    ->addDirectory(sprintf('%s/../src/Module', __DIR__))
    ->configure();

$app->run();