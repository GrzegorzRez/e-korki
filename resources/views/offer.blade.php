@extends('layouts/main')
@section('content')
	{{ Auth::user()->name }}
	{{ Auth::user()->email }}
	{{ Offers:find(1)->user_id}}
	{{ Offers:find(1)->user_id }}
	{{ Offers:find(1)->user_id }}
@endsection