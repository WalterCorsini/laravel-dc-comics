@extends('layouts.app')

@section('content')
    <div class="container w-75 m-auto text-center">
        <h1>Aggiungi articolo</h1>
        <form action="{{ route('dccomics.store') }}" method="POST">
        {{-- cosi ci riconosce il server --}}
        @csrf
            <div>
                <label for="title">Titolo</label>
                <input type="text" id="title" name="title">
            </div>
            <div>
                <label for="description">Descrizione</label>
                <input type="text" id="description" name="description">
            </div>
            <div>
                <label for="thumb">Immagine</label>
                <input type="text" id="thumb" name="thumb" placeholder="url dell'immagine">
            </div>
            <div>
                <label for="price">Prezzo</label>
                <input type="text" id="price" name="price" placeholder="prezzo in euro">
            </div>
            <div>
                <label for="series">Serie</label>
                <input type="text" id="series" name="series">
            </div>
            <div>
                <label for="sale_date">Uscita</label>
                <input type="text" id="sale_date" name="sale_date">
            </div>
            <div>
                <label for="type">Genere</label>
                <input type="text" id="type" name="type">
            </div>

            <button class="btn btn-success" type="submit">Aggiungi</button>
        </form>
    </div>
@endsection
