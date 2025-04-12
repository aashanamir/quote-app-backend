<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteApiController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('category');

        if ($category) {
            $quotes = \App\Models\Quote::whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            })->get();
        } else {
            $quotes = \App\Models\Quote::all();
        }

        return response()->json($quotes);
    }

    public function featured()
    {
        $quotes = \App\Models\Quote::where('is_featured', true)->get();
        return response()->json($quotes);
    }

    public function search(Request $request)
    {
        $q = $request->query('q');
        $quotes = \App\Models\Quote::where('text', 'like', '%'.$q.'%')->get();
        return response()->json($quotes);
    }

    public function show(Request $request)
    {
        return response()->json(\App\Models\Quote::all());
    }
}
