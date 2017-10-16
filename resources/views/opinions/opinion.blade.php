<div class="media opinion">
    <div class="media-body">
        <div>
            <h4 class="media-heading left">{{ $opinion->student->name }} {{ $opinion->student->surname }}<small class="right"><i>Wystawiono: {{ $opinion->created_at }}</i></small></h4>
        </div>
        <p>{{ $opinion->content }}</p>
        <p>Ocena: {{ $opinion->grade }}</p>
        @if( $opinion->student->id == Auth::id() )
            <a class="btn btn-sm" role="button" href="" onclick="sendDeleteOpinionRequest({{  $opinion->id  }})">
                Usuń
            </a>
        @endif
    </div>
</div>