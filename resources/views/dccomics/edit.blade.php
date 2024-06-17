@extends('layouts.app')

@section('content')
    <div class="container w-75 m-auto">

        {{-- cosi ci riconosce il server --}}
        <div class="container w-75 m-auto">
            <h1 class="text-center">Modifica articolo</h1>
            <form action="{{ route('dccomics.update', ['dccomic' => $dccomic->id]) }}" method="POST">
                {{-- cosi ci riconosce il server --}}
                @csrf
                @method('PUT')
                <div class="d-flex gap-3 mb-3">
                    <label for="title">Titolo</label>
                    <input class="w-75" type="text" id="title" name="title" value="{{ $dccomic->title }}">
                </div>
                <div class="d-flex gap-3 mb-3">
                    <label for="description">Descrizione</label>
                    <textarea class="w-75" rows="8" id="description" name="description">
                        {{ $dccomic->description }}
                </textarea>
                </div>
                <div class="d-flex gap-3 mb-3">
                    <label for="thumb">Immagine</label>
                    <input class="w-75" type="text" id="thumb" name="thumb" value="{{ $dccomic->thumb }}">
                </div>
                <div class="d-flex gap-3 mb-3">
                    <label for="price">Prezzo</label>
                    <input class="w-75" type="text" id="price" name="price" value="{{ $dccomic->price }}">
                </div>
                <div class="d-flex gap-3 mb-3">
                    <label for="series">Serie</label>
                    <input class="w-75" type="text" id="series" name="series" value="{{ $dccomic->series }}">
                </div>
                <div class="d-flex gap-3 mb-3">
                    <label for="sale_date">Uscita</label>
                    <input class="w-75" type="text" id="sale_date" name="sale_date" value="{{ $dccomic->sale_date }}">
                </div>
                <div class="d-flex gap-3 mb-3">
                    <label for="type">Genere</label>
                    <select class="w-75" name="type" id="type">
                        <option value="comic book">Seleziona Genere</option>
                        <option @selected($dccomic->type === 'comic book') value="comic book">comic book</option>
                        <option @selected($dccomic->type === 'graphic novel') value="graphic novel">graphic novel</option>
                    </select>
                    {{-- <label for="type">Genere</label>
                    <input class="w-75 mb-3" type="text" id="type" name="type" value="{{ $dccomic->type }}"> --}}
                </div>
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Apporta modifiche</button>
                    <a class="btn btn-danger" href="{{ route('dccomics.index') }}">Torna alla Home</a>
                </div>

            </form>
        @endsection
