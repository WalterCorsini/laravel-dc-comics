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

                    {{-- btn delete  --}}
                    <form action="{{ route('delete', $curComic->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>

                </div>
                {{-- /section btn --}}

            </div>
        @endforeach
    </div>
@endsection

