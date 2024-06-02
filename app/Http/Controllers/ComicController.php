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
        //$comics = Comic::all();
        //$comics = Comic::orderByDesc('id')->paginate(5);
        $comics = Comic::orderBy('id')->paginate(4);
        //$comics = Comic::paginate(3);
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        //dd($request->title);
        $validatedData = $request->validate([
            'title' => 'required|unique:comics|min:2|max:30',
            'body' => 'required|unique:comics|min:20|max:1000',
            'cover_image' => 'required|unique:comics'
        ]);

        /* $comic = new Comic();
        $comic->title = $data['title'];
        $comic->save(); */

        $comic = Comic::create($validatedData);

        return to_route('comics.show', $comic);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:comics|min:2|max:30',
            'body' => 'required|min:20|max:1000',
            'cover_image' => 'required'
        ]);

        $comic->update($validatedData);
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
