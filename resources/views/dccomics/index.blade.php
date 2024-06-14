@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column align-items-center justify-content-center pt-5">
        <h1>Lista Fumetti</h1>
        @foreach ($dcComicsList as $curComic)
            <div class="d-flex border-bottom align-items-center w-75 pt-3">
                <div class="w-75">
                    <p><strong> Titolo:         </strong>   {{ $curComic->title }}      </p>
                    {{-- <p><strong> Descrizione:    </strong>   {{ $curComic->description }}</p> --}}
                    <p><strong>Serie:           </strong>   {{ $curComic->series}}      </p>
                    <p><strong>Genere:          </strong>   {{ $curComic->type}}        </p>
                    <p><strong>Uscita:          </strong>   {{ $curComic->sale_date}}   </p>
                    <p><strong>Prezzo:          </strong>   {{ $curComic->price}} €     </p>
                    <a class="btn btn-info text-black text-decoration-none" href="{{ route('dccomics.show', ['dccomic' => $curComic->id]) }}">per saperene di piu</a>
                </div>
                <div class="w-25">
                    <img class="w-100" src="{{ $curComic->thumb }}">
                </div>
            </div>
        @endforeach
    </div>
@endsection
