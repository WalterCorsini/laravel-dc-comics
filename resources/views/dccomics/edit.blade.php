@extends('layouts.app')

@section('content')
    <div class="container w-75">
        <h1 class="text-center">Modifica Articolo</h1>
        <form class="w-100 d-flex flex-column gap-3" action="{{ route('dccomics.update', ['dccomic' => $dccomic->id]) }}" method="POST">
            @csrf
            @method('put')
            <div>
                <label for="title">Titolo</label>
                <input class="w-100" type="text" id="title" name="title" value="{{$dccomic->title}}">
            </div>
            <div>
                <label for="description">Descrizione</label>
                <textarea class="w-100" rows="8" type="text" id="description" name="description">
                    {{$dccomic->description}}
                </textarea>
            </div>
            <div>
                <label for="thumb">Immagine</label>
                <input class="w-100" type="text" id="thumb" name="thumb" placeholder="url dell'immagine" value="{{$dccomic->thumb}}">
            </div>
            <div>
                <label for="price">Prezzo</label>
                <input class="w-100" type="text" id="price" name="price" placeholder="prezzo in euro" value="{{$dccomic->price}}">
            </div>
            <div>
                <label for="series">Serie</label>
                <input class="w-100" type="text" id="series" name="series" value="{{$dccomic->series}}">
            </div>
            <div>
                <label for="sale_date">Uscita</label>
                <input class="w-100" id="sale_date" name="sale_date" value="{{$dccomic->sale_date}}">
            </div>
            <div>
                <label for="type">Genere</label>
                <select class="w-25" name="type" id="type">
                    <option value="seleziona genere">Seleziona Genere</option>
                    <option @selected($dccomic->type === 'comic book') value="@old('type',comic book)">comic book</option>
                    <option @selected($dccomic->type === 'graphic novel') value="@old('type',graphic novel)">graphic novel</option>
                </select>
            </div>
            <div class="text-center">
                <button class="btn btn-success" type="submit">Apporta modifiche</button>
                <a class="btn btn-danger" href="{{ route('dccomics.index') }}">Torna alla Home</a>
            </div>
        </form>
    </div>
@endsection
