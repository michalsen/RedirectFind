<?php

use Slim\Http\Request;
use Slim\Http\Response;

require 'models/DispenseRecord.php';



//Home
$app->get('/', function ($request, $response, $args) {
    return $this->view->render($response, 'index.html', [
        'name' => 'home'
    ]);
})->setName('profile');


// Dynamic (testing)
$app->get('/{name}', function ($request, $response, $args) {
    return $this->view->render($response, 'index.html', [
        'name' => $args['name']
    ]);
})->setName('profile');





