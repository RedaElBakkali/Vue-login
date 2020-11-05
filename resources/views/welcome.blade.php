@extends('layouts.app')
@section('content')

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8" id="app">
        <home-component @auth :user="{{ json_encode(Auth::user()) }}"@endauth></home-component>
    </div>

@endsection



