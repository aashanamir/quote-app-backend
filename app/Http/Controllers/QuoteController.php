<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quotes = \App\Models\Quote::all();
        return view('quotes.index', compact('quotes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = \App\Models\Category::all();
        return view('quotes.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'text' => 'required',
            'author' => 'nullable',
            'type' => 'required|in:text,image',
            'image' => 'nullable',
            'is_featured' => 'nullable|boolean',
        ]);

        \App\Models\Quote::create($request->all());

        return redirect('/admin/quotes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $quote = \App\Models\Quote::findOrFail($id);
        $categories = \App\Models\Category::all();
        return view('quotes.edit', compact('quote', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category_id' => 'required',
            'text' => 'required',
            'author' => 'nullable',
            'type' => 'required|in:text,image',
            'image' => 'nullable',
            'is_featured' => 'nullable|boolean',
        ]);

        $quote = \App\Models\Quote::findOrFail($id);
        $quote->update($request->all());

        return redirect('/admin/quotes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $quote = \App\Models\Quote::findOrFail($id);
        $quote->delete();

        return redirect('/admin/quotes');
    }
}
