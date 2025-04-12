<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackApiController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'nullable',
            'email' => 'nullable|email',
            'message' => 'required',
        ]);

        \App\Models\Feedback::create($request->all());

        return response()->json(['message' => 'Feedback submitted successfully']);
    }
}
