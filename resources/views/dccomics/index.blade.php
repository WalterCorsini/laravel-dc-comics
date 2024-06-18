@extends('layouts.app')

@section('content')
    {{-- container --}}
    <div class="container">
        {{-- card- container --}}
        @foreach ($dcComicsList as $curComic)
            @include('partials.card-index')
        @endforeach
        {{-- /card-container  --}}
    </div>
    {{-- /container --}}

@endsection
