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
        @foreach($project->tasks as $task)
            <form class="project-tasks" method="POST" action="/tasks/{{ $task->id }}">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
            <label class="checkbox {{ $task->completed ? 'is-complete' : '' }}" for="completed">
                    <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                        {{ $task->description }}
                </label>

            </form>
        @endforeach
    @endif

    <form method="POST" action="/projects/{{ $project->id }}/tasks">
        @csrf
        <label for="description">New Task</label>
        <input type="text" class="input" name="description" placeholder="New Task" required>
        <button type="submit">Add Task</button>
    </form>

    @include('errors')

@endsection