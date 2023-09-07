<?php

declare(strict_types=1);

namespace Framework\Core\Http;

use JetBrains\PhpStorm\Pure;

class Request
{
    public function __construct(
        private readonly array $getParams,
        private readonly array $postData,
        private readonly array $cookies,
        private readonly array $files,
        private readonly array $server,
    )
    {
    }

    #[Pure] public static function createFromGlobals(): static
    {
        return new static($_GET, $_POST, $_COOKIE, $_FILES, $_SERVER);
    }
}
