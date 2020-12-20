<?php
ini_set('display_errors', 1);

use Jerowork\RouteAttributeProvider\RouteAttributeConfigurator;
use Jerowork\RouteAttributeProvider\Slim\SlimRouteAttributeProvider;
use Slim\Factory\AppFactory;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

define('PROJECT_ROOT', __DIR__ . '/..');

require PROJECT_ROOT . '/vendor/autoload.php';

$containerBuilder = new ContainerBuilder();
$loader = new YamlFileLoader($containerBuilder, new FileLocator(PROJECT_ROOT));
$loader->load('config/dependency-injection.yml');

$app = AppFactory::createFromContainer($containerBuilder);

$app->addErrorMiddleware(displayErrorDetails: true, logErrors: true, logErrorDetails: true);

$routeConfigurator = new RouteAttributeConfigurator(
    SlimRouteAttributeProvider::createFromApp($app)
);

$routeConfigurator
    ->addDirectory(sprintf('%s/src/Module', PROJECT_ROOT))
    ->configure();

$app->run();