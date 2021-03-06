<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Solve;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SolveController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $solves = Solve::all($request->user());

        return new JsonResponse($solves);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Solve  $solve
     * @return \Illuminate\Http\Response
     */
    public function show(Solve $solve)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Solve  $solve
     * @return \Illuminate\Http\Response
     */
    public function edit(Solve $solve)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Solve  $solve
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solve $solve)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Solve  $solve
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solve $solve)
    {
        //
    }
}
