@extends('layouts.app')

@section('content')
    @foreach ($dcComicsList as $curComic)
        <div class="d-flex border-bottom align-items-center w-75 pt-3 m-auto">
            {{-- left col text --}}
            <div class="w-75">
                <p><strong> Titolo: </strong> {{ $curComic->title }} </p>
                <p><strong>Serie: </strong> {{ $curComic->series }} </p>
                <p><strong>Genere: </strong> {{ $curComic->type }} </p>
                <p><strong>Uscita: </strong> {{ $curComic->sale_date }} </p>
                <p><strong>Prezzo: </strong> {{ $curComic->price }} € </p>

                {{-- section btn --}}
                <div class="d-flex gap-2">
                    <a class="btn btn-info text-white text-decoration-none"
                        href="{{ route('dccomics.show', ['dccomic' => $curComic->id]) }}">per saperene di piu</a>
                    <a class="btn btn-success text-decoration-none"
                        href="{{ route('dccomics.edit', ['dccomic' => $curComic->id]) }}">Modifica</a>

                    {{-- btn delete  --}}
                    <form action="{{ route('dccomics.destroy', ['dccomic' => $curComic->id]) }}"
                        method="POST" class="delete">
                        @csrf
                        @method('DELETE')
                    <button type="button" data-comic-title="{{$curComic->title}}" class="btn btn-danger">
                        Elimina
                    </button>
                    </form>


                    <!-- modal -->
                    @include('partials.modal-delete')
                    {{-- /modal --}}

                </div>
                {{-- /section btn --}}

            </div>
            {{-- /left-col text --}}



            {{-- right col image --}}
            <div class="w-25">
                <img class="w-100" src="{{ $curComic->thumb }}">
            </div>
            {{-- /right-col image --}}

        </div>
    @endforeach
    </div>
@endsection
