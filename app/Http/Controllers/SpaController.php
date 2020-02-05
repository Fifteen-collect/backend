<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\Http\JsonResponse;

class SpaController extends Controller
{
    protected ViewFactory $viewFactory;

    public function __construct(ViewFactory $viewFactory)
    {
        $this->viewFactory = $viewFactory;
    }

    public function index(): ViewContract
    {
        return $this->viewFactory->make('index');
    }

    public function token(): JsonResponse
    {
        return new \Illuminate\Http\JsonResponse([
            'token' => csrf_token()
        ]);
    }
}
