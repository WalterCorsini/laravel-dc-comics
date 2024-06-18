@extends('layouts.app')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
    <div class="container w-75">
        <h1 class="text-center">Aggiungi articolo</h1>
        <form class="w-100 d-flex flex-column gap-3" action="{{ route('dccomics.store') }}" method="POST">
            @csrf
            <div>
                <label for="title">Titolo</label>
                <input class="w-100" type="text" id="title" name="title" value="{{ old('title') }}">
            </div>
            <div>
                <label for="description">Descrizione</label>
                <textarea class="w-100" type="text" id="description" name="description">
                    {{ old('description') }}
                </textarea>
            </div>
            <div>
                <label for="thumb">Immagine</label>
                <input class="w-100" type="text" id="thumb" name="thumb" value="{{ old('thumb') }}">
            </div>
            <div>
                <label for="price">Prezzo</label>
                <input class="w-100" type="text" id="price" name="price" value="{{ old('price') }}">
            </div>
            <div>
                <label for="series">Serie</label>
                <input class="w-100" type="text" id="series" name="series" value="{{ old('series') }}">
            </div>
            <div>
                <label for="sale_date">Uscita</label>
                <input class="w-100" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
            </div>
            <div>
                <label for="type">Genere</label>
                <select class="w-25" name="type" id="type">
                    <option>Seleziona Genere</option>
                    <option value="comic book">comic book</option>
                    <option value="graphic novel">graphic novel</option>
                </select>
            </div>
            <div class="text-center">
                <button class="btn btn-success" type="submit">Aggiungi</button>
            </div>
        </form>
    </div>
@endsection
