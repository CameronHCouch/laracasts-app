@extends('layout')
{{-- sections can be filled inline using the below syntax; this is great for smaller changes --}}
@section('title', 'Projects')   

@section('content')
{{-- {{}} sanitizes inputs, treating them as plaintext --}}
{{-- to add code here, instead use {!! $foo !!} --}}
    <h1>Projects!</h1>
{{-- Blade syntax simplifies looping and compiles to vanilla PHP --}}
    <ol>
    @foreach ($projects as $project)
        <li>{{ $project->title }}</li>
    @endforeach
    </ol>

    <a href="/projects/create">Create a new Project!</a>
@endsection