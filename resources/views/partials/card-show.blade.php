<div class="cointainer w-75 m-auto text-center d-flex justify-content-center align-items-center gap-3">

    {{-- img --}}
    <div class="w-50">
        <img class="w-75" src="{{$dccomic->thumb}}" alt="">
    </div>
    {{-- /img --}}

    {{-- comic text --}}
    <div class="w-50">
        <p><strong>Serie: </strong> {{ $dccomic->series }} </p>
        <p><strong>Genere: </strong> {{ $dccomic->type }} </p>
        <p><strong>Uscita: </strong> {{ $dccomic->sale_date }} </p>
        <p><strong>Prezzo: </strong> {{ $dccomic->price }} € </p>
        <p> {{ $dccomic->description }}</p>
    </div>
    {{-- /comic text --}}

</div>