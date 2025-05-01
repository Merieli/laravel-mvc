<?php

namespace Meri\NameApp\Http\Controllers;

use Illuminate\Http\Request;
use Meri\NameApp\Models\Serie;

class SeriesController extends Controller
{
    function index(Request $request)
    {   
        // Retorna uma collection que é uma lista de objetos, no caso, uma lista de séries
        $series = Serie::query()->orderBy('nome')->get();

        return view('series.index')->with('series', $series);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nomeSerie = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();

        return redirect('/series');
    }
}
