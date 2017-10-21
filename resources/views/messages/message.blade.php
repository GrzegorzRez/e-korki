@if($message->send_id == Auth::id() && $message->receive_id == $receiveUser->id)
    <div class="row">
        <div class="panel panel-primary col-xs-7">
            <div class="panel-heading">
                {{Auth::user()->getFullName()}}
            </div>
            <div class="panel-body">
                {{ $message->content }}
            </div>
            <small>{{$message->created_at}}</small>
        </div>
    </div>
@elseif($message->send_id == $receiveUser->id && $message->receive_id == Auth::id())
    <div class="row">
        <div class="col-xs-5"></div>
        <div class="panel panel-info col-xs-7">
            <div class="panel-heading text-right">
                {{$receiveUser->getFullName()}}
            </div>
            <div class="panel-body text-right">
                {{ $message->content }}
            </div>
            <small>{{$message->created_at}}</small>
        </div>
    </div>
@endif