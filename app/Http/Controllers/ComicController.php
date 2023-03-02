<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::orderBy('series')->get();
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
        // Validazione
        $request->validate([
            'title' => 'required|string|unique:comics',
            'thumb' => 'nullable|url',
            'price' => 'required|string',
            'series' => 'required|string',
            'sale_date' => 'required|string',
            'type' => 'required|string',

        ]);

        // prendo i dati che l raccolgo in array $data
        $data = $request->all();


        //Instanzio un oggetto
        $new_comic = new Comic();

        // $new_comic->title = $data['title'];
        // $new_comic->description = $data['description'];
        // $new_comic->thumb = $data['thumb'];
        // $new_comic->price = $data['price'];
        // $new_comic->series = $data['series'];
        // $new_comic->sale_date = $data['sale_date'];
        // $new_comic->type = $data['type'];
        // $new_comic->artists = $data['artists'];
        // $new_comic->writers = $data['writers'];

        $new_comic->fill($data);

        // Salvo nel Database
        $new_comic->save();

        // return redirect()->route('comics.index');
        return to_route('comics.show', $new_comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::findOrFail($id);

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
        // Prendo tutti campi del form
        $data = $request->all();

        // Validazione
        $request->validate([
            'title' => ['required', 'string', Rule::unique('comics')->ignore($comic->id)],
            'thumb' => 'nullable|url',
            'price' => 'required|string',
            'series' => 'required|string',
            'sale_date' => 'required|string',
            'type' => 'required|string',

        ]);

        // Riempio i campi del form
        $comic->title = $comic['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $comic->artists = $data['artists'];
        $comic->writers = $data['writers'];

        $comic->save();

        // Funzione per rimandare alla pagina di dettaglio una volta apportate le modifiche
        return to_route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return to_route('comics.index')->with('delete', 'Eliminazione avvenuta con successo');
    }
}
