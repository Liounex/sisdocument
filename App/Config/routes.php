<?php
require_once __DIR__ . '/config.php';

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Slim\App;

$app = new App();
$app->get('/', function (Request $request, Response $response, array $args) {
    include_once __DIR__ . '/../Views/dashboard.php';
    return $response;
});
$app->get('/dashboard', function (Request $request, Response $response, array $args) {
    include_once __DIR__ . '/../Views/dashboard.php';
    return $response;
});
$app->get('/tramite', function (Request $request, Response $response, $args) {
    include_once __DIR__ . '/../Views/tramite.php';
    return $response;
});
$app->get('/certificado', function (Request $request, Response $response, $args) {
    include_once __DIR__ . '/../Views/certificado.php';
    return $response;
});
$app->get('/constancia', function (Request $request, Response $response, $args) {
    include_once __DIR__ . '/../Views/constancia.php';
    return $response;
});


