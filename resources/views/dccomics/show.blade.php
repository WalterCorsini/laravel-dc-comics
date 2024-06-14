@extends('layouts.app')

@section('content')
    <div class="cointainer w-75 m-auto text-center">
        <h1 class="pb-3">Dettagli Fumetto : </h1>
        <p> {{ $dccomic->description }}</p>
    </div>
@endsection
