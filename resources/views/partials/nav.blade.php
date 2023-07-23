<nav>
    <ul class="container">
        @foreach($NavLinks as $link)
        <li>
            <img src="{{ Vite::asset($link['imgSrc'])}}" alt="Item shop image">
            <h2>
                {{ $link['title'] }}
            </h2>
        </li>
        @endforeach
    </ul>
</nav>