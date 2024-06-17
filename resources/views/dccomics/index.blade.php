@extends('layouts.app')

@section('content')
        @foreach ($dcComicsList as $curComic)
            <div class="d-flex border-bottom align-items-center w-75 m-auto pt-3">
                <div class="w-75">
                    <p><strong> Titolo: </strong> {{ $curComic->title }} </p>
                    {{-- <p><strong> Descrizione:    </strong>   {{ $curComic->description }}</p> --}}
                    <p><strong>Serie: </strong> {{ $curComic->series }} </p>
                    <p><strong>Genere: </strong> {{ $curComic->type }} </p>
                    <p><strong>Uscita: </strong> {{ $curComic->sale_date }} </p>
                    <p><strong>Prezzo: </strong> {{ $curComic->price }} € </p>
                    <div class="d-flex gap-2">
                        <a class="btn btn-info text-black text-decoration-none"
                            href="{{ route('dccomics.show', ['dccomic' => $curComic->id]) }}">per saperene di piu</a>
                        <a class="btn btn-success text-black text-decoration-none"
                            href="{{ route('dccomics.edit', ['dccomic' => $curComic->id]) }}">Modifica</a>
                            <form action="{{ route('dccomics.destroy', ['dccomic' => $curComic->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Sei sicuro di volerlo eliminare?')">Elimina</button>
                        </form>
                    </div>
                </div>
                <div class="w-25">
                    <img class="w-100" src="{{ $curComic->thumb }}">
                </div>
            </div>
        @endforeach
    </div>
@endsection
