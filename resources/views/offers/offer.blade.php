<div class="media opinion" onclick="window.location = '{{  route('offers.show',['id'=>$offer->id])  }}'">
    <div class="media-body row">
        <div class="col-xs-3">
            <img src="{{ $offer->user->getAvatarHref()  }}"  class="img-rounded img-responsive">
        </div>
        <div class="col-xs-9">
            <div class="row">
                <div class="col-xs-10">
                    <h2>{{ $offer->name }}</h2>
                    <h4  class="card-title">{{ $offer->user->getFullName() }}</h4>
                    <p><h4>{{ $offer->location }}</h4></p>
                    <p>{{ $offer->description }}</p>
                    @if( $offer->online )
                        <span class="badge badge-pill badge-success">On-line</span>
                    @endif
                    @if( $offer->teacher_home )
                        <span class="badge badge-pill badge-success">U nauczyciela</span>
                    @endif
                    @if( $offer->student_home )
                        <span class="badge badge-pill badge-success">W domu ucznia</span>
                    @endif
                    @foreach($offer->tags as $tag)
                        @if(  $loop->first)
                            |
                        @endif
                        <span class="badge badge-pill badge-success">{{ $tag->name }}</span>
                    @endforeach
                </div>
                <div class="col-xs-2 text-right">
                    <p>{{ $offer->category->name }}</p>
                    <p>{{ $offer->price_per_hour }} zł</p>
                    <p>60 min.</p>
                </div>
            </div>
        </div>
    </div>
</div>