<div class="cointainer w-75 m-auto text-center d-flex justify-content-center align-items-center gap-3">
    {{-- img --}}
    <div class="w-50">
        <img class="w-75" src="{{$curComic->thumb}}" alt="">
    </div>
    {{-- /img --}}

    {{-- comic text --}}
    <div class="w-50">
        <p><strong>Serie: </strong> {{ $curComic->series }} </p>
        <p><strong>Genere: </strong> {{ $curComic->type }} </p>
        <p><strong>Uscita: </strong> {{ $curComic->sale_date }} </p>
        <p><strong>Prezzo: </strong> {{ $curComic->price }} € </p>
        <p> {{ $curComic->description }}</p>
        @include('partials.btn-modify')
    </div>
    {{-- /comic text --}}

</div>
