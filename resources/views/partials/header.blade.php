<header class="bg-dark text-white pt-4">

    <nav class="nav justify-content-center">

        <a class="nav-link text_white {{ Route::currentRouteName() === 'home' ? 'bg-warning text-dark fw-bolder' : '' }}"
            href="{{ route('home') }}">Home</a>
        <a class="nav-link text_white {{ Route::currentRouteName() === 'about' ? 'bg-warning text-dark fw-bolder' : '' }}"
            href="{{ route('about') }}">About</a>
        <a class="nav-link text_white {{ Route::currentRouteName() === 'contacts' ? 'bg-warning text-dark fw-bolder' : '' }}"
            href="{{ route('contacts') }}">Contacts</a>

        <a class="nav-link 
        {{ Route::currentRouteName() === 'home' ||
        Route::currentRouteName() === 'about' ||
        Route::currentRouteName() === 'contacts' ||
        Route::currentRouteName() === 'comics.show'
            ? ''
            : 'd-none' }}"
            href="{{ route('comics.index') }}">Admin</a>
    </nav>


</header>
