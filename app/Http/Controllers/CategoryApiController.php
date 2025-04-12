<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryApiController extends Controller
{
    public function index()
    {
        $categories = \App\Models\Category::all();
        return response()->json($categories);
    }
}
