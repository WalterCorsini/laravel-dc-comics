<header class="d-flex justify-content-between align-items-center ps-5 pe-5">
    <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="logo">
    <ul class="d-flex justify-content-center align-items-center gap-3">
        <li class="{{ Request::route()->getName() === 'dccomics.index' ? 'active' : '' }}"><a href="{{ route('dccomics.index') }}">Home</a></li>
        <li class="{{ Request::route()->getName() === 'dccomics.create' ? 'active' : '' }}"><a href="{{ route('dccomics.create') }}">Aggiungi</a></li>
        <li class="{{ Request::route()->getName() === 'dccomics.trash' ? 'active' : '' }}"><a href="{{ route('dccomics.trash') }}">Cestino</a></li>
    </ul>
</header>
