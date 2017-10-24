@if($message->send_id == Auth::id() && $message->receive_id == $receiveUser->id)

<div class="row">
    <div class="col-lg-7">

  <div class="panel panel-primary">
    <div class="panel-body">
          <h2>{{Auth::user()->getFullName()}} <small>{{$message->created_at}}</small></h2>
        {{ $message->content }}
        <p></p>
    </div>
  </div>
  </div>
</div>
@elseif($message->send_id == $receiveUser->id && $message->receive_id == Auth::id())



<div class="row">
    <div class="col-lg-7 pull-right">

  <div class="panel panel-primary">
    <div class="panel-body">
          <h2>{{$receiveUser->getFullName()}} <small>{{$message->created_at}}</small></h2>
        {{ $message->content }}
        <p></p>
    </div>
  </div>
  </div>
</div>
@endif