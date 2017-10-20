<div class="btn-group btn-group-justified">
    <a class="btn btn-default btn-lg" role="button" href="{{ route('offers.edit',['id'=>$offer->id]) }}">
        Edytuj
    </a>
    <a class="btn btn-danger btn-lg" role="button" href="{{ route('offers.delete',['offer'=>$offer]) }}">
        Usuń
    </a>
</div>