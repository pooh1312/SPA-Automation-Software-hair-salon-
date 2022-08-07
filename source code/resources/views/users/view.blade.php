@extends( Auth::user()->is_admin != 1 && Auth::user()->role_id == 0  ?  'layouts.clientapp' : 'layouts.app' )

@section('title', $user->first_name.' '.$user->last_name .' '.'-' )

@section('content')

    <user-details :user="{{$user}}"></user-details>

@endsection