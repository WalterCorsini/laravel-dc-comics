@extends('layouts.app')

@section('content')


    {{-- to control if there are or not element --}}
    @if (count($dcComicsList) > 0)
        {{-- section title --}}
        <div class="d-flex justify-content-center align-items-center mt-5 pt-5">
            <h1> Cestino</h1>
        </div>
        {{-- /section title --}}


        {{-- form restore all  --}}
        <form class="text-center" action="{{ route('restoreall')}}" method="POST">
            @csrf
            @method('PUT')
            <button type="submit" class="btn btn-warning mb-5">
                <i class="fa-solid fa-rotate-left">All</i>
            </button>
        </form>
        {{-- /form restore all  --}}

        {{-- container-fluid --}}
        <div class="container-fluid">

            {{-- container  --}}
            <div class="container p-5">

                {{-- card-container  --}}
                @foreach ($dcComicsList as $key => $curComic)
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">{{ $key+1 }}</th>
                                <td class="col-10">
                                    {{ $curComic->title }}
                                </td>
                                <td class="col-1">
                                    {{-- btn delete  --}}
                                    <form action="{{ route('delete', $curComic->id) }}" METHOD="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                    {{-- /btn delete  --}}
                                </td>
                                <td class="col-1">
                                    {{-- btn restore  --}}
                                    <form action="{{ route('restore', $curComic->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-outline-success">
                                            <i class="fa-solid fa-rotate-left"></i>
                                        </button>
                                    </form>
                                    {{-- /btn restore  --}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                @endforeach
                {{-- card-container  --}}

            </div>
            {{-- container  --}}

        </div>
        {{-- container-fluid --}}
    @else
        {{-- message no element --}}
        <h1 class="text-center">
            Nessun Fumetto nel cestino
        </h1>
        {{-- /message no element --}}
    @endif
    {{-- /to control if there are or not element --}}



@endsection
