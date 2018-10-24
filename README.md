# routify-slim-handler

## Installation

`composer require controlabs/routify-slim-handler`

## How to use


```
// Routify
// Defining routes
routify = new Routify();
$routify->delete('users', \MyApp\Controllers\UserController::class, 'delete');
$routify->get('users/{id}', \MyApp\Controllers\UserController::class, 'get');
$routify->post('users', \MyApp\Controllers\UserController::class, 'create');
$routify->put('users/{id}/cancel', \MyApp\Controllers\UserController::class, 'cancel');

// Creating Slim App
$app = new \Slim\App();

// Manipulating the routes
$slimHandler = new SlimHandler($app);
$slimHandler->handle($routify->routes());
```
