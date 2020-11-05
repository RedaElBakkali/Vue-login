@extends('layouts.app')
@section('content')
<admin-app @auth :user="{{ json_encode(Auth::user()) }}" :user_roles="{{ json_encode(Auth::user()->roles) }}" @endauth></admin-app>
@endsection