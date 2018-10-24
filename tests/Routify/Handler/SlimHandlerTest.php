<?php

declare(strict_types=1);

namespace Controlabs\Tests\Routify\Handler;

use Controlabs\Routify\Handler\SlimHandler;
use Controlabs\Routify\RouteException;
use Controlabs\Routify\Routify;

class SlimHandlerTest extends \Controlabs\Tests\AbstractTestCase
{
    public function testInvalidClass()
    {
        $this->expectException(RouteException::class);
        $this->expectExceptionMessage('Invalid instance of Slim\App.');

        new SlimHandler(
            new \stdClass()
        );
    }

    public function testValidClass()
    {
        $routify = new Routify();
        $routify->delete('tests', 'Handler', 'action');
        $routify->get('tests', 'Handler', 'action');
        $routify->post('tests', 'Handler', 'action');
        $routify->put('tests', 'Handler', 'action');

        $app = new \Slim\App();
        $handler = new SlimHandler($app);
        $handler->handle($routify->routes());
        $slimRoutes = $app->getContainer()->get('router')->getRoutes();

        $this->assertEquals(4, count($slimRoutes));
    }
}
