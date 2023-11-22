<?php

namespace App\Http\Controllers;

class WebGLController extends Controller
{
    public function index()
    {
        return view('webgl.index', [
            "title" => "WebGL",
            "active" => "webgl"
        ]);
    }
}
