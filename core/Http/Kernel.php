<?php

declare(strict_types=1);

namespace Framework\Core\Http;

use JetBrains\PhpStorm\Pure;

class Kernel
{
    #[Pure] public function handle(Request $request): Response
    {
        $content = '<h1>Hello from Kernel</h1>';

        return new Response($content);
    }
}
