<header class="container">
    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="brand Logo">
    <ul>
        @foreach ($headerLinks as $link)
        <li>
            <a>
                {{ $link['title'] }}
            </a>
        </li>
        @endforeach
    </ul>
</header>