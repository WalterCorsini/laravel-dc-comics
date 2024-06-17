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
                    <a class="btn btn-info text-black text-decoration-none"
                        href="{{ route('dccomics.show', ['dccomic' => $curComic->id]) }}">per saperene di piu</a>
                    <a class="btn btn-success text-black text-decoration-none"
                        href="{{ route('dccomics.edit', ['dccomic' => $curComic->id]) }}">Modifica</a>

                    {{-- btn delete  --}}
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target='[data-form="{{ $curComic->id }}"]'>
                        Elimina
                    </button>
                    {{-- /btn delete  --}}

                    <!-- modal -->
                    <div class="modal fade" id="Modale" data-form="{{ $curComic->id }}"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModaleLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                {{--  text and button modal --}}
                                <div class="modal-body text-center">
                                    Sei sicuro di voler cancellare l'elemento selezionato?
                                    <div class="d-flex gap-3 justify-content-center mt-3">
                                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Annulla</button>
                                        <form action="{{ route('dccomics.destroy', ['dccomic' => $curComic->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-outline-success" id="delete" type="submit">Conferma</button>
                                        </form>
                                    </div>
                                </div>
                                {{--  /text and button modal --}}

                            </div>
                        </div>
                    </div>
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
