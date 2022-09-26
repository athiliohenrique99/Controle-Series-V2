<x-layout title="Séries">
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-3">Adicionar</a>

    @isset($mensagemSucesso)
        <div class="alert alert-success">

            {{ $mensagemSucesso }}
        </div>
    @endisset
    <div class="container">
        <div class="row border rounded shadow p-3">
            @foreach ($series as $serie)
                <div class="col-md-3 mt-3 border-bottom rounded">{{ $serie->nome }}</div>
                <div class="col-md-1 text-end">
                    <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-primary btn-sm">
                        E
                    </a>
                </div>
                <div class="col-md-8">
                    <form action="{{ route('series.destroy', $serie->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-sm">X</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
