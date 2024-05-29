<header class="bg-dark text-white">

    <nav class="nav justify-content-center">

        <a class="nav-link text_white {{ Route::currentRouteName() === 'home' ? 'bg-white text-dark' : '' }}"
            href="{{ route('home') }}">Home</a>
        <a class="nav-link text_white {{ Route::currentRouteName() === 'about' ? 'bg-white text-dark' : '' }}"
            href="{{ route('about') }}">About</a>
        <a class="nav-link text_white {{ Route::currentRouteName() === 'contacts' ? 'bg-white text-dark' : '' }}"
            href="{{ route('contacts') }}">Contacts</a>

        <a class="nav-link 
        {{ Route::currentRouteName() === 'home' ||
        Route::currentRouteName() === 'about' ||
        Route::currentRouteName() === 'contacts'
            ? ''
            : 'd-none' }}"
            href="{{ route('comics.index') }}">Admin</a>
    </nav>


</header>
