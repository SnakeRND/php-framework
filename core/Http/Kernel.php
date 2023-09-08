<?php

declare(strict_types=1);

namespace Framework\Core\Http;

use FastRoute\RouteCollector;

use function FastRoute\simpleDispatcher;

class Kernel
{
    public function handle(Request $request): Response
    {
        $dispatcher = simpleDispatcher(function (RouteCollector $collector) {
            $routes = include BASE_PATH . '/routes/web.php';

            foreach ($routes as $route) {
                $collector->addRoute(...$route);
            }
        });

        $server = $request->getServer();

        $routeInfo = $dispatcher->dispatch(
            $server['REQUEST_METHOD'],
            $server['REQUEST_URI']
        );

        [$status, $handler, $vars] = $routeInfo;

        return $handler($vars);
    }
}
