<?php

namespace App\Http\Controllers;

use App\Models\Webgl;
use Illuminate\Http\Request;

class DashboardWebglController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.webgl.index', [
            "title" => "Webgl",
            "active" => "webgl",
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Webgl $webgl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Webgl $webgl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Webgl $webgl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Webgl $webgl)
    {
        //
    }
}
