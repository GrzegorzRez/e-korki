@extends('layouts.main')

@section('title',$user->getFullName())

@section('content')
    <div class="container">

        <div class="row profile">
            <div class="col-md-3 text-center">
                <img src="{{ $user->getAvatarHref() }}" class="img-rounded profile_picture img-responsive"/>
                <h3>
                    {{$user->getFullName()}}
                </h3>
                @if(Auth::id()==$user->id)
                    <a role="button" class="btn btn-primary btn-sm" href="{{ route('profile.edit')  }}">Edytuj mój profil</a>
                @else
                    <a role="button" class="btn btn-success btn-sm" href="{{ route('messages.conversation',['receive_user_id'=>$user->id]) }}">Wiadomość</a>
                    <a role="button" class="btn btn-primary btn-sm" href="{{ route('profile.opinions',['user'=>$user])  }}">Opinia</a>
                    <a role="button" class="btn btn-default btn-sm" href="{{ route('resources.shareForUser',['user'=>$user])  }}" >Udostępnij materiały</a>
                @endif
                <div class="profile-usermenu">
                    <ul class="nav" role="tablist">
                        <li>
                            <a  href="{{ route('profile.show',['user'=>$user])  }}"> Informacje </a>
                        </li>
                        <li>
                            <a href="{{ route('profile.offers',['user'=>$user])  }}"> Oferty <span class="badge badge-secondary">{{  $user->getCountOfOffers()  }}</span> </a>
                        </li>
                        <li>
                            <a href="{{ route('profile.opinions',['user'=>$user])  }}"> Opinie <span class="badge badge-secondary">{{  $user->getCountOfOpinions()  }}</span> </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                @yield('profile_content')
            </div>
        </div>
    </div>
@endsection