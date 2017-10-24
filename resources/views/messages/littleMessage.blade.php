<div class="media conversation" style="padding: 2px; height: 54px;">
    <a class="pull-left" href="{{  $user->getProfileHref()  }}">
        <img width="50px" height="50px" src="{{  $user->getAvatarHref()  }}">
    </a>
    <div class="media-body">
        <h5 class="media-heading">{{  $user->getFullName()  }}</h5>
        <small>{{ $message->content  }}</small>
        <a href="{{ route('messages.conversation',['receive_user_id'=>$user->id]) }}">Otwórz konwersację</a>
    </div>
</div>
<hr>