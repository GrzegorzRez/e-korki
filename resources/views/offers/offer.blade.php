<div class="media opinion">
    <div class="media-body">
        <div>
            <h4 class="media-heading left">{{ $offer->user->name }} {{ $offer->user->surname }}</h4>
        </div>
        <p>{{ $offer->description }}</p>
        <p>Cena: {{ $offer->price_per_hour }}</p>
    </div>
</div>