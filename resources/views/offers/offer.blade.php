<div class="media opinion" onclick="window.location = '#' ">
    <div class="media-body row">
        <div class="col-xs-3">
            <img src="{{ $offer->user->getAvatarHref()  }}"  class="img-rounded img-responsive">
        </div>
        <div class="col-xs-9">
            <div class="row">
                <div class="col-sm-10">
                    <h2>{{ $offer->name }}</h2>
                    <p>{{ $offer->user->getFullName() }}</p>
                    <p>{{ $offer->description }}</p>
                </div>
                <div class="col-sm-2 text-right">
                    <p>{{ $offer->category->name }}</p>
                    <p>{{ $offer->price_per_hour }} zł</p>
                    <p>60 min.</p>
                </div>
            </div>
        </div>
    </div>
</div>