<?php
\Slim\Route::setDefaultConditions(array(
    'id' => '\d*'
));

// Find    GET /descriptions/123
$app->get('/descriptions/:id', function ($id) use ($app) {
    $controller = $app->ioc->make('\App\Controller\Description');
    $result = $controller->find($id);
    echo $result->toJson() . PHP_EOL;
    echo $result->ethnicity;
})->name('description.find');

// Find All    GET /descriptions
$app->get('/descriptions', function () use ($app) {
    $controller = $app->ioc->make('\App\Controller\Description');
    $result = $controller->findAll();
    echo $result->toJson();
})->name('description.findAll');

// Update  PUT /descriptions/123
$app->put('/descriptions/:id', function ($id) use ($app) {
    $controller = $app->ioc->make('\App\Controller\Description');
    $result = $controller->update($id, $app->request->params());
    echo $result->toJson();
})->name('description.update');

// Create  POST    /descriptions
$app->post('/descriptions', function () use ($app) {
    $controller = $app->ioc->make('\App\Controller\Description');
    $result = $controller->create($app->request->params());
    echo $result->toJson();
})->name('description.create');

// Delete  DELETE  /descriptions/123
$app->delete('/descriptions/:id', function ($id) use ($app) {
    $controller = $app->ioc->make('\App\Controller\Description');
    $result = $controller->delete($id);
    echo $result->toJson();
})->name('description.delete');


/*
Action  HTTP Verb   URL
Find    GET /people/123
Find All    GET /people
Update  PUT /people/123
Create  POST    /people
Delete  DELETE  /people/123
 */
