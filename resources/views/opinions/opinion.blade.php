@push('styles')
    <link rel="stylesheet" href="/css/opinion.css">
@endpush
<div class="row review-block">
    <div class="col-xs-3">
        <a href="{{ $opinion->student->getProfileHref() }}"><img src="{{  $opinion->student->getAvatarHref() }}" class="img-rounded img-responsive"></a>
    </div>
    <div class="col-xs-9">
        <div class="row">
            <div class="review-block-name col-xs-6"><a href="{{ $opinion->student->getProfileHref() }}">{{ $opinion->student->getFullName() }} </a></div>
            <div class="review-block-date col-xs-6 text-right">{{ date('d-m-Y', strtotime($opinion->created_at)) }}</div>
        </div>
        <div class="review-block-rate">
            @for( $i = 0 ; $i < $opinion->grade ; $i++ )
                ★
            @endfor
        </div>
        <div class="review-block-content">{{ $opinion->content }}</div>
    </div>
</div>