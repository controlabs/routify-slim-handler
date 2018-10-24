<?php

namespace Controlabs\Routify\Handler;

use Controlabs\Routify\RouteCollection;
use Controlabs\Routify\RouteException;

class SlimHandler implements \Controlabs\Routify\HandlerInterface
{
    protected $app;

    public function __construct($app)
    {
        $this->assertValidInstance($app);
        $this->app = $app;
    }

    public function handle(RouteCollection $routes)
    {
        foreach ($routes as $r) {
            $method = strtolower($r->method());
            $this->app->{$method}($r->route(), $r->handler() . ':' . $r->action());
        }
    }

    private function assertValidInstance($app)
    {
        if (!is_a($app, '\Slim\App')) {
            throw new RouteException('Invalid instance of Slim\App.');
        }
    }
}
