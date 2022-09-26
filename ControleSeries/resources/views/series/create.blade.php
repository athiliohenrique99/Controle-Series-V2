<x-layout title="Nova Série">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <x-series.form :action="route('series.store')" />
</x-layout>
