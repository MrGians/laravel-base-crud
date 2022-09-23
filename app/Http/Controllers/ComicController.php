<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        $main_banner_items = config('data.main-banner-items');
        return view('comics.index', compact('comics', 'main_banner_items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comic = new Comic();
        return view('comics.create', compact('comic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'title' => ['required', 'string', 'max:255', 'unique:comics'],
            'thumb' => 'required|string',
            'description' => 'required|string',
            'series' => 'required|string|',
            'type' => 'required|string',
            'sale_date' => 'required|date',
            'price' => 'required|numeric|min:0.01'
        ], [
            'title.required' => "Il campo <strong>'Titolo'</strong> è obbligatorio",
            'title.unique' => "Il titolo <strong>'$request->title'</strong> esiste già",
            'title.max' => "Il titolo <strong>'$request->title'</strong> supera i :max caratteri",
            'thumb.required' => "La <strong>'Copertina'</strong> è obbligatoria",
            'description.required' => "Il campo <strong>'Descrizione'</strong> è obbligatorio",
            'series.required' => "Il campo <strong>'Serie'</strong> è obbligatorio",
            'type.required' => "Il campo <strong>'Tipologia Fumetto'</strong> è obbligatorio",
            'sale_date.required' => "Il campo <strong>'Data di Vendita'</strong> è obbligatorio",
            'sale_date.date' => "Il campo <strong>'Data di Vendita'</strong> deve essere una data",
            'price.required' => "Il campo <strong>'Prezzo'</strong> è obbligatorio",
            'price.min' => "Il prezzo inserito <strong>'$request->price'</strong> è minore di :min",
            'price.numeric' => "Il campo <strong>'Prezzo'</strong> deve essere un numero",
        ]);


        $new_comic = new Comic;
        $new_comic->fill($data);
        $new_comic->save();

        return redirect()->route('comics.show', $new_comic)->with('message', "Il fumetto è stato Creato con successo")->with('type', 'success');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        $comic_banner_items = config('data.comic-banner-items');
        return view('comics.show', compact('comic', 'comic_banner_items'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comic = Comic::findOrFail($id);
        $data = $request->all();
        $request->validate([
            'title' => ['required', 'string', 'max:255', Rule::unique('comics')->ignore($id)],
            'thumb' => 'required|string',
            'description' => 'required|string',
            'series' => 'required|string|',
            'type' => 'required|string',
            'sale_date' => 'required|date',
            'price' => 'required|numeric|min:0.01'
        ], [
            'title.required' => "Il campo <strong>'Titolo'</strong> è obbligatorio",
            'title.unique' => "Il titolo <strong>'$request->title'</strong> esiste già",
            'title.max' => "Il titolo <strong>'$request->title'</strong> supera i :max caratteri",
            'thumb.required' => "La <strong>'Copertina'</strong> è obbligatoria",
            'description.required' => "Il campo <strong>'Descrizione'</strong> è obbligatorio",
            'series.required' => "Il campo <strong>'Serie'</strong> è obbligatorio",
            'type.required' => "Il campo <strong>'Tipologia Fumetto'</strong> è obbligatorio",
            'sale_date.required' => "Il campo <strong>'Data di Vendita'</strong> è obbligatorio",
            'sale_date.date' => "Il campo <strong>'Data di Vendita'</strong> deve essere una data",
            'price.required' => "Il campo <strong>'Prezzo'</strong> è obbligatorio",
            'price.min' => "Il prezzo inserito <strong>'$request->price'</strong> è minore di :min",
            'price.numeric' => "Il campo <strong>'Prezzo'</strong> deve essere un numero",
        ]);

        $comic->fill($data);
        $comic->save();

        return redirect()->route('comics.show', $comic->id)->with('message', "Il fumetto è stato Modificato con successo")->with('type', 'success');;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();

        return redirect()->route('comics.index')->with('message', "Il fumetto è stato Eliminato con successo")->with('type', 'success');
    }
}
