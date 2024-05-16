<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::orderByDesc('id')->paginate(8);

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());

        //$data = $request->all();

        $val_data = $request->validate([
            'title' => 'required|min:5|max:80',
            'description' => 'nullable|min:10',
            'price' => 'nullable|min:5|max:30',
            'thumb' => 'nullable|min:50|max:255',
            'series' => 'nullable|min:5|max:50',
            'sale_date' => 'nullable',
            'type' => 'nullable|min:3|max:50'
        ]);

        Comic::create($val_data);

        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $val_data = $request->validate([
            'title' => 'required|min:5|max:80',
            'description' => 'nullable|min:10',
            'price' => 'nullable|min:5|max:30',
            'thumb' => 'nullable|min:50|max:255',
            'series' => 'nullable|min:5|max:50',
            'sale_date' => 'nullable',
            'type' => 'nullable|min:3|max:50'
        ]);

        $comic->update($val_data);

        return to_route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        //dd($comic);

        $comic->delete();

        return to_route('comics.index');
    }
}
