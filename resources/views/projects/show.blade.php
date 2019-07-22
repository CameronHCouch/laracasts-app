@extends('layout')
{{-- sections can be filled inline using the below syntax; this is great for smaller changes --}}
@section('title', '{{$project->title}}')   

@section('content')
    <h1>{{$project->title}}!</h1>
    <ul>
        <li>{{$project->description}}</li>
    </ul>

    <a href="/projects/{{$project->id}}/edit">Edit this project?</a>
@endsection