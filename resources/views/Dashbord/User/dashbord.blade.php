@extends('layouts.app')
@section('content')
    <user-app @auth :user="{{ json_encode(Auth::user()) }}" :user_roles="{{ json_encode(Auth::user()->roles) }}" @endauth></user-app>
@endsection
