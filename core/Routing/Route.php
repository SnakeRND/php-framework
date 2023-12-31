<?php

declare(strict_types=1);

namespace Framework\Core\Routing;

class Route
{
    public static function get(string $uri, array $handler): array
    {
        return ['GET', $uri, $handler];
    }

    public static function post(string $uri, array $handler): array
    {
        return ['POST', $uri, $handler];
    }
}
