@extends('layout')
{{-- sections can be filled inline using the below syntax; this is great for smaller changes --}}
@section('title', 'Edit Project')   

@section('content')
{{-- {{}} sanitizes inputs, treating them as plaintext --}}
{{-- to add code here, instead use {!! $foo !!} --}}
    <h1>Edit this Project!</h1>
    <form method="POST" action="/projects/{{$project->id}}">
      {{ method_field('PATCH') }}
      @csrf
      <div>
      <input type="text" name="title" class="title" placeholder="Project title" value="{{$project->title}}" required/>
      </div>
      
      <div>
      <textarea name="description" placeholder="Project description" required>{{$project->description}}</textarea>
      </div>
      
      <div>
        <button type="submit">Update Project</button>
      </div>
    </form>
    <form method="POST" action="/projects/{{$project->id}}">
      {{ method_field('DELETE') }}
      @csrf
      <button type="submit" class="delete">Delete Project</button>
    </form>

    @include('errors')
@endsection