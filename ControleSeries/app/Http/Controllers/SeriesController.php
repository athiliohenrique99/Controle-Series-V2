<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    function index(Request $request)
    {
        $series = Serie::query()->orderBy('nome')->groupBy('nome')->get();

        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nomeSeries = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeSeries;
        $serie->save();

        // DB::insert('INSERT INTO Series (nome) VALUES (?)', [$nomeSeries]);
        return redirect('/series');
    }
}
