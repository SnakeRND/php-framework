<?php

use Framework\Core\Routing\Route;

return [
    Route::get('/', [HomeController::class, 'index']),
];
