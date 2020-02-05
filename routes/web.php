<?php

use Illuminate\Routing\Router;
use App\Http\Controllers;

Route::get('/token', [Controllers\SpaController::class, 'token']);

Route::auth();

Route::group([
    'middleware' => 'web',
], function (Router $router): void {
    $router->get('/', [Controllers\SpaController::class, 'index']);
});

Route::group([
    'middleware' => 'auth',
], function (Router $router): void {
    $router->get('/solves', [Controllers\SolveController::class, 'index']);
});
