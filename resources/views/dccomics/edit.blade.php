@extends('layouts.app')

@section('content')
    <div class="container w-75 m-auto text-center">
        <h1>Aggiungi articolo</h1>
        <form action="{{ route('dccomics.update', ['dccomic' => $dccomic->id]) }}" method="POST">
        {{-- cosi ci riconosce il server --}}
        @csrf
        @method('PUT')
            <div>
                <label for="title">Titolo</label>
                <input type="text" class="w-100" id="title" name="title" value="{{$dccomic->title}}">
            </div>
            <div>
                <label for="description">Descrizione</label>
                <textarea class="w-100" id="description" name="description">
                    {{$dccomic->description}}
                </textarea>
            </div>
            <div>
                <label for="thumb">Immagine</label>
                <input type="text" class="w-100" id="thumb" name="thumb" value="{{ $dccomic->thumb }}">
            </div>
            <div>
                <label for="price">Prezzo</label>
                <input type="text" class="w-100" id="price" name="price" value="{{ $dccomic->price }}">
            </div>
            <div>
                <label for="series">Serie</label>
                <input type="text" class="w-100" id="series" name="series" value=" {{ $dccomic->series }} ">
            </div>
            <div>
                <label for="sale_date">Uscita</label>
                <input type="text" class="w-100" id="sale_date" name="sale_date" value=" {{ $dccomic->sale_date }} ">
            </div>
            <div>
                <label for="type">Genere</label>
                <input type="text" class="w-100 mb-3" id="type" name="type" value=" {{ $dccomic->type }} ">
            </div>

            <button class="btn btn-success" type="submit">Apporta modifiche</button>
            <a class="btn btn-danger" href="{{ route('dccomics.index') }}">Torna alla Home</a>

        </form>
    </div>
@endsection
