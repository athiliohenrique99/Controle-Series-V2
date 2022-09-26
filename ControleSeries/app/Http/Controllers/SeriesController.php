<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;

class SeriesController extends Controller
{
    function index(Request $request)
    {
        $series = Serie::query()->orderBy('nome')->groupBy('nome')->get();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('series.index')->with('series', $series)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {
        $request->validate([
            'nome' => ['required', 'min:3'],

        ]);
        $serie = Serie::create($request->all());

        return redirect(route('series.index'))->with('mensagem.sucesso', "Série {$serie->nome} adicionada com sucesso.");
    }

    public function destroy(Serie $series, Request $request)
    {
        $series->delete();

        return redirect(route('series.index'))->with('mensagem.sucesso', "Série {$series->nome} removida com sucesso");
    }

    public function edit(Serie $series, Request $request)
    {
        return view('series.edit')->with('serie', $series);
    }

    public function update(Serie $series, SeriesFormRequest $request)
    {
        $series->fill($request->all());
        $series->save();

        return redirect('series.index')->with('mensagem.sucesso', "Série {$series->nome} atualizada com sucesso.");
    }
}
