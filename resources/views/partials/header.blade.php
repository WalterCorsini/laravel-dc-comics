<header class="d-flex justify-content-between align-items-center ps-5 pe-5">
    <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="logo">
    <ul class="d-flex justify-content-center align-items-center gap-3">
        <li class="{{ Request::route()->getName() === 'about' ? 'active' : '' }}"><a href="{{ route('about') }}">About</a></li>
        <li class="{{ Request::route()->getName() === 'contact' ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
        <li class="{{ Request::route()->getName() === 'home' ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
    </ul>
</header>
