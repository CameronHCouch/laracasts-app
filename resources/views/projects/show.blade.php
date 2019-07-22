@extends('layout')
{{-- sections can be filled inline using the below syntax; this is great for smaller changes --}}
@section('title') 
    {{$project->title}}
@endsection   

@section('content')
    <h1>{{$project->title}}!</h1>
    <p>{{$project->description}}</p>
    <a href="/projects/{{$project->id}}/edit">Edit</a>

    @if($project->tasks->count())
        <div class="project-tasks">
            <ul>
                @foreach($project->tasks as $task)
                    <li>{{ $task->description }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection