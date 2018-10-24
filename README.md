# routify-slim-handler

[![Build Status](https://travis-ci.org/controlabs/routify-slim-handler.svg?branch=master)](https://travis-ci.org/controlabs/routify-slim-handler)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/controlabs/routify-slim-handler/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/controlabs/routify-slim-handler/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/controlabs/routify-slim-handler/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/controlabs/routify-slim-handler/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/controlabs/routify-slim-handler/badges/build.png?b=master)](https://scrutinizer-ci.com/g/controlabs/routify-slim-handler/build-status/master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/controlabs/routify-slim-handler/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)
[![PHPStan](https://img.shields.io/badge/PHPStan-enabled-brightgreen.svg?style=flat)](https://github.com/phpstan/phpstan)

[![License](https://poser.pugx.org/controlabs/routify-slim-handler/license)](https://packagist.org/packages/controlabs/routify-slim-handler)
[![Latest Stable Version](https://poser.pugx.org/controlabs/routify-slim-handler/v/stable)](https://packagist.org/packages/controlabs/routify-slim-handler)
[![Latest Unstable Version](https://poser.pugx.org/controlabs/routify-slim-handler/v/unstable)](https://packagist.org/packages/controlabs/routify-slim-handler)
[![composer.lock](https://poser.pugx.org/controlabs/routify-slim-handler/composerlock)](https://packagist.org/packages/controlabs/routify-slim-handler)
[![Total Downloads](https://poser.pugx.org/controlabs/routify-slim-handler/downloads)](https://packagist.org/packages/controlabs/routify-slim-handler)

## Installation

```
composer require controlabs/routify-slim-handler
```

## How to use


```php
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

## License

This software is open source, licensed under the The MIT License (MIT). See [LICENSE](https://github.com/controlabs/routify-slim-handler/blob/master/LICENSE) for details.
