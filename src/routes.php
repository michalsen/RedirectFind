<?php

use Slim\Http\Request;
use Slim\Http\Response;



require 'models/DispenseRecord.php';
require 'models/GetList.php';


// POST to scan
$app->post('/scan', function($request, $response, $args){
    $site = $request->getParam('site');
        if (filter_var($site, FILTER_VALIDATE_URL)) {
            $record = new DispenseRecord($site);
        } else {
            $site = 'Error. Must be a valid URL.';
        }
    return $this->view->render($response, 'scan.html.twig', [
        'name' => $site
    ]);
});


// Home
$app->get('/', function ($request, $response, $args) {
    return $this->view->render($response, 'index.html.twig', [
        'name' => 'home'
    ]);
})->setName('profile');


// Scan
$app->get('/scan', function ($request, $response, $args) {
    $return = new GetList();

    return $this->view->render($response, 'scan.html.twig', [
        'name' => 'home',
        'sites' => $return->list
    ]);

})->setName('profile');


// Dynamic (testing)
$app->get('/{name}', function ($request, $response, $args) {
    return $this->view->render($response, 'index.html.twig', [
        'name' => $args['name']
    ]);
})->setName('profile');



