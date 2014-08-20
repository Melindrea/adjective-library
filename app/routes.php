<?php
\Slim\Route::setDefaultConditions(array(
    'id' => '\d*'
));

// Find    GET /descriptions/123
$app->get('/descriptions/:id', function ($id) {
    echo sprintf('Get Description %d', $id);
})->name('description.find');

// Find All    GET /descriptions
$app->get('/descriptions', function () {
    echo 'Gets all descriptions based on parameters';
})->name('description.findAll');

// Update  PUT /descriptions/123
$app->put('/descriptions/:id', function ($id) {
    echo sprintf('Updates Description %d', $id);
})->name('description.update');

// Create  POST    /descriptions
$app->post('/descriptions', function () {
    echo 'Adds Description';
})->name('description.create');

// Delete  DELETE  /descriptions/123
$app->delete('/descriptions/:id', function ($id) {
    echo sprintf('Deletes Description %d', $id);
})->name('description.delete');


/*
Action  HTTP Verb   URL
Find    GET /people/123
Find All    GET /people
Update  PUT /people/123
Create  POST    /people
Delete  DELETE  /people/123
 */
