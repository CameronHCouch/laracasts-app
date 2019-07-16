@extends('layout')
{{-- sections can be filled inline using the below syntax; this is great for smaller changes --}}
@section('title', 'Welcome')   

@section('content')
{{-- {{}} sanitizes inputs, treating them as plaintext --}}
{{-- to add code here, instead use {!! $foo !!} --}}
    <h1>My {{ $foo }} Laravel App!</h1>
{{-- Blade syntax simplifies looping and compiles to vanilla PHP --}}
    <ul>
        @foreach($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
@endsection