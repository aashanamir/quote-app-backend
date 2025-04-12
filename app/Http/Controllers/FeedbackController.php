<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feedback = \App\Models\Feedback::all();
        return view('feedback.index', compact('feedback'));
    }
}
