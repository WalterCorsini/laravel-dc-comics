@extends('layouts.app')

@section('content')
@if(count($dcComicsList) >0)
    <h1 class="text-center"> Cestino</h1>
    {{-- btn restore all  --}}
    <form class="text-center" action="{{ route('restoreall') }}" method="GET">
        @csrf
        <button type="submit" class="btn btn-outline-success mb-5">Ripristina Tutto</button>
    </form>
    {{-- /btn restore all  --}}
@else
    <h1 class="text-center"> Nessun Fumetto nel cestino</h1>
@endif
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
                        <button type="submit" class="btn btn-outline-danger">Elimina</button>
                    </form>
                    {{-- /btn delete  --}}

                    {{-- btn restore  --}}
                    <form action="{{ route('restore', $curComic->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-success">Ripristina</button>
                    </form>
                    {{-- /btn restore  --}}

                </div>
                {{-- /section btn --}}

            </div>
        @endforeach
    </div>
@endsection
