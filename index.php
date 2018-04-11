<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;
$app->get('/clima', function () {
    $hal = ["nombre:" => "HAL", "cuenta:" =>"095173337"];
    header("Content-type: application/json");
    echo json_encode($hal);

});
$app->run();