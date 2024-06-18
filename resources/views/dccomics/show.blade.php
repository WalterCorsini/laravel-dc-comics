@extends('layouts.app')

@section('content')
    <div class="cointainer w-75 m-auto text-center">
        <h1 class="pb-3">Dettagli Fumetto : </h1>
        <p><strong>Serie: </strong> {{ $dccomic->series }} </p>
        <p><strong>Genere: </strong> {{ $dccomic->type }} </p>
        <p><strong>Uscita: </strong> {{ $dccomic->sale_date }} </p>
        <p><strong>Prezzo: </strong> {{ $dccomic->price }} € </p>
        <p> {{ $dccomic->description }}</p>
    </div>
@endsection
