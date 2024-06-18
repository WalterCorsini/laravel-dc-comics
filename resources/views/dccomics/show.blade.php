@extends('layouts.app')

@section('content')
<h1 class="pb-3 text-center">Dettagli Fumetto : </h1>
    <div class="cointainer w-75 m-auto text-center d-flex justify-content-center align-items-center gap-3">
        <div class="w-50">
            <img class="w-75" src="{{$dccomic->thumb}}" alt="">
        </div>
        <div class="w-50">
            <p><strong>Serie: </strong> {{ $dccomic->series }} </p>
            <p><strong>Genere: </strong> {{ $dccomic->type }} </p>
            <p><strong>Uscita: </strong> {{ $dccomic->sale_date }} </p>
            <p><strong>Prezzo: </strong> {{ $dccomic->price }} € </p>
            <p> {{ $dccomic->description }}</p>
        </div>
    </div>
@endsection
