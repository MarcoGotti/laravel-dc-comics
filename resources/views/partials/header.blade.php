<header class="bg-dark text-white">
    <nav class="nav justify-content-center">
        <a class="nav-link text_white {{ Route::currentRouteName() === 'home' ? 'bg-white text-dark' : '' }}"
            href="{{ route('home') }}">Home</a>
        <a class="nav-link text_white" href="#">About</a>
        <a class="nav-link text_white" href="#">Contacts</a>
        <a class="nav-link {{ Route::currentRouteName() === 'home' ? '' : 'd-none' }}"
            href="{{ route('comics.index') }}">Admin</a>
    </nav>


</header>
