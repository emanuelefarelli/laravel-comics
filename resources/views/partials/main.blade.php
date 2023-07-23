<div class="jumbotron">
    <div class="banner">
        current series
    </div>
</div>
<main>
    <div class="container">
        
        @foreach ($comicsCards as $cards)
            <div class="card">
                <img src="{{ $cards['thumb']}}" alt="comic thumb image">
                <h2>
                    {{ $cards['title'] }}
                </h2>
            </div>
        @endforeach

        <button>
            Load More
        </button>
    </div>
</main>