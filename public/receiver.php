<?php 


use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


chdir(__DIR__ . '/..');

require 'vendor/autoload.php';

$app = new \Slim\App;

$app->get('/', function (Request $request, Response $response, array $args) {
    $ReceiverController = new \Utech\Controllers\ReceiverController;
    $ReceiverController->receiver();
});

$app->run();
