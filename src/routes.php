<?php

use Slim\Http\Request;
use Slim\Http\Response;

require 'models/DispenseRecord.php';


//Home
$app->get('/', function ($request, $response, $args) {
    return $this->view->render($response, 'index.html.twig', [
        'name' => 'home'
    ]);
})->setName('profile');


//Home
$app->get('/scan', function ($request, $response, $args) {
    return $this->view->render($response, 'scan.html.twig', [
        'name' => 'home'
    ]);
})->setName('profile');


// Dynamic (testing)
$app->get('/{name}', function ($request, $response, $args) {
    return $this->view->render($response, 'index.html.twig', [
        'name' => $args['name']
    ]);
})->setName('profile');


// POST to scan
$app->post('/scan', function($request, $response, $args){
    $site = $request->getParam('site');
    return $this->view->render($response, 'scan.html.twig', [
        'name' => $site
    ]);
});
