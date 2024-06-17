@extends('layouts.app')

@section('content')
    <div class="container w-75 m-auto">
        <h1 class="text-center">Aggiungi articolo</h1>
        <form action="{{ route('dccomics.store') }}" method="POST">
        {{-- cosi ci riconosce il server --}}
        @csrf
            <div class="d-flex gap-3 mb-3">
                <label for="title">Titolo</label>
                <input class="w-75" type="text" id="title" name="title">
            </div>
            <div class="d-flex gap-3 mb-3">
                <label for="description">Descrizione</label>
                <input class="w-75" type="text" id="description" name="description">
            </div>
            <div class="d-flex gap-3 mb-3">
                <label for="thumb">Immagine</label>
                <input class="w-75" type="text" id="thumb" name="thumb" placeholder="url dell'immagine">
            </div>
            <div class="d-flex gap-3 mb-3">
                <label for="price">Prezzo</label>
                <input class="w-75" type="text" id="price" name="price" placeholder="prezzo in euro">
            </div>
            <div class="d-flex gap-3 mb-3">
                <label for="series">Serie</label>
                <input class="w-75" type="text" id="series" name="series">
            </div>
            <div class="d-flex gap-3 mb-3">
                <label for="sale_date">Uscita</label>
                <input class="w-75" type="text" id="sale_date" name="sale_date">
            </div>
            <div class="d-flex gap-3 mb-3">
                <label for="type">Genere</label>
                <select class="w-75" name="type" id="type">
                    <option value="comic book">Seleziona Genere</option>
                    <option value="comic book">comic book</option>
                    <option value="graphic novel">graphic novel</option>
                </select>
                {{-- <label for="type">Genere</label>
                <input class="w-75 mb-3" type="text" id="type" name="type"> --}}
            </div>
            <div class="text-center">
                <button class="btn btn-success" type="submit">Aggiungi</button>
            </div>
        </form>
    </div>
@endsection
