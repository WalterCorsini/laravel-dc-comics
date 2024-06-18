@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($dcComicsList as $curComic)

            <div class="card-container">
                {{-- title --}}
                <div class="card-title">
                    <span><strong> Titolo: </strong></span>
                    <p>
                        {{ $curComic->title }}
                    </p>
                </div>
                {{-- /title --}}

                {{-- img --}}
                <div class="card-img mb-2">
                    <img src="{{ $curComic->thumb }}">
                </div>
                {{-- /img --}}

                {{-- section btn --}}
                <div class="card-button">
                    <a class="btn btn-info text-white text-decoration-none"
                        href="{{ route('dccomics.show', ['dccomic' => $curComic->id]) }}"><i class="fa-solid fa-plus"></i></a>
                    <a class="btn btn-success text-decoration-none"
                        href="{{ route('dccomics.edit', ['dccomic' => $curComic->id]) }}"><i class="fa-solid fa-pen-to-square"></i></a>

                    {{-- btn delete  --}}
                    <form action="{{ route('dccomics.destroy', ['dccomic' => $curComic->id]) }}"
                        method="POST" class="delete">
                        @csrf
                        @method('DELETE')
                    <button type="button" data-comic-title="{{$curComic->title}}" class="btn btn-danger">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                    </form>
                    <!-- modal -->
                    @include('partials.modal-delete')
                    {{-- /modal --}}
                </div>
                {{-- /section btn --}}

            </div>

            @endforeach
        </div>
@endsection
