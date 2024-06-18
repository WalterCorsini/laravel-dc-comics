@extends('layouts.app')

@section('content')

    {{-- section error validate --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- /section error validate --}}

    {{-- container --}}
    <div class="container w-75">
        
        {{-- section title --}}
        <h1 class="text-center">
            Modifica Articolo
        </h1>

        {{-- form --}}
        <form class="w-100 d-flex flex-column gap-3"
        action="{{ route('dccomics.update', ['dccomic' => $dccomic->id]) }}"
        method="POST">
            @csrf
            @method('put')

            {{-- title comic --}}
            <div>
                <label for="title">
                    Titolo
                </label>
                <input
                    class="form-control w-100
                    @error('title')
                        is-invalid
                    @enderror"
                    type="text" id="title" name="title"
                    value="{{ @old('title', $dccomic->title) }}">
            </div>
            {{-- /title comic --}}

            {{-- description comic --}}
            <div>
                <label for="description">
                    Descrizione
                </label>
                <textarea
                    class="form-control w-100
                    @error('description')
                        is-invalid
                    @enderror"
                    rows="8" type="text" id="description" name="description">
                    {{ @old('description', $dccomic->description) }}
                </textarea>
            </div>
            {{-- /description comic --}}

            {{-- image comic --}}
            <div>
                <label for="thumb">
                    Immagine
                </label>
                <input
                    class="form-control w-100
                    @error('thumb')
                        is-invalid
                    @enderror"
                    type="text" id="thumb" name="thumb" placeholder="url dell'immagine"
                    value="{{ @old('thumb', $dccomic->thumb) }}">
            </div>
            {{-- /image comic --}}

            {{-- price comic --}}
            <div>
                <label for="price">
                    Prezzo
                </label>
                <input
                    class="form-control w-100
                    @error('price')
                        is-invalid
                    @enderror"
                    type="text" id="price" name="price" placeholder="prezzo in euro"
                    value="{{ @old('price', $dccomic->price) }}">
            </div>
            {{-- /price comic --}}

            {{-- series comic --}}
            <div>
                <label for="series">
                    Serie
                </label>
                <input
                    class="form-control w-100
                    @error('series')
                        is-invalid
                    @enderror"
                    type="text" id="series" name="series"
                    value="{{ @old('series', $dccomic->series) }}">
            </div>
            {{-- /series comic --}}

            {{-- sale_date comic --}}
            <div>
                <label for="sale_date">Uscita</label>
                <input
                    class="form-control w-100
                    @error('sale_date')
                        is-invalid
                    @enderror"
                    id="sale_date" name="sale_date"
                    value="{{ @old('sale_date', $dccomic->sale_date) }}">
            </div>
            {{-- /sale_date comic --}}

            {{-- type comic --}}
            <div>
                <label for="type">
                    Genere
                </label>
                <select
                    class="form-control w-25
                    @error('type')
                        is-invalid
                    @enderror"
                    name="type" id="type">
                    <option value="seleziona genere">Seleziona Genere</option>
                    <option @selected(@old('type', $dccomic->type) === 'comic book')
                        value="comic book">comic book</option>
                    <option @selected(@old('type', $dccomic->type) === 'graphic novel')
                        value="graphic novel">graphic novel</option>
                </select>
            </div>
            {{-- /type comic --}}

            {{-- button --}}
            <div class="text-center">
                <button class="btn btn-success" type="submit">
                    <i class="fa-solid fa-check"></i>
                </button>
                <a class="btn btn-danger" href="{{ route('dccomics.index') }}">
                    <i class="fa-solid fa-rotate-left"></i>
                </a>
            </div>
            {{-- /button --}}

        </form>
        {{-- /form --}}

    </div>
    {{-- /container --}}

@endsection
