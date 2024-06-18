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
        <h1 class="text-center">Aggiungi articolo</h1>

        {{-- form --}}
        <form class="w-100 d-flex flex-column gap-3" action="{{ route('dccomics.store') }}" method="POST">
            @csrf

            {{-- comic title --}}
            <div>
                <label for="title">
                    Titolo
                </label>
                <input
                    class="form-control w-100
                    @error('title')
                        is-invalid
                    @enderror"
                    type="text" id="title" name="title" value="{{ old('title') }}">
            </div>
            {{-- /comic title --}}

            {{-- comic description --}}
            <div>
                <label for="description">
                    Descrizione
                </label>
                <textarea
                    class="form-control w-100
                    @error('description')
                        is-invalid
                    @enderror"
                    type="text" id="description" name="description">
                    {{ old('description') }}
                </textarea>
            </div>
            {{-- /comic description --}}

            {{-- comic thumb --}}
            <div>
                <label for="thumb">
                    Immagine
                </label>
                <input
                    class="form-control w-100
                    @error('thumb')
                        is-invalid
                    @enderror"
                    type="text" id="thumb" name="thumb" value="{{ old('thumb') }}">
            </div>
            {{-- /comic thumb --}}

            {{-- comic price --}}
            <div>
                <label for="price">
                    Prezzo
                </label>
                <input
                    class="form-control w-100
                    @error('price')
                        is-invalid
                    @enderror"
                    type="text" id="price" name="price" value="{{ old('price') }}">
            </div>
            {{-- /comic price --}}

            {{-- comic series --}}
            <div>
                <label for="series">
                    Serie
                </label>
                <input
                    class="form-control w-100
                    @error('series')
                        is-invalid
                    @enderror"
                    type="text" id="series" name="series" value="{{ old('series') }}">
            </div>
            {{-- /comic series --}}

            {{-- comic sale_date --}}
            <div>
                <label for="sale_date">
                    Uscita
                </label>
                <input
                    class="form-control w-100
                    @error('sale_date')
                        is-invalid
                    @enderror"
                    id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
            </div>
            {{-- /comic sale_date --}}

            {{-- comic type and button add --}}
            <div class="d-flex gap-2">

                <label for="type">
                    Genere
                </label>

                <select
                    class="form-control w-25
                    @error('type')
                        is-invalid
                    @enderror"
                    name="type" id="type">
                    <option>Seleziona Genere</option>
                    <option @selected(@old('type') === 'comic book') value="comic book">comic book</option>
                    <option @selected(@old('type') === 'graphic novel') value="graphic novel">graphic novel</option>
                </select>
                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        <i class="fa-solid fa-plus"> Aggiungi </i>
                    </button>
                </div>
            </div>
            {{-- /comic type and button add --}}

        </form>
        {{-- /form --}}

    </div>
    {{-- container --}}

@endsection
