@extends('layout')
{{-- sections can be filled inline using the below syntax; this is great for smaller changes --}}
@section('title', 'Create a New Project')   

@section('content')
{{-- {{}} sanitizes inputs, treating them as plaintext --}}
{{-- to add code here, instead use {!! $foo !!} --}}
    <h1>Create a new Project!</h1>
    <form method="POST" action="/projects">
      {{ csrf_field() }}
      <div>
        <input type="text" name="title" placeholder="Project title" />
      </div>
      
      <div>
        <textarea name="description" placeholder="Project description"></textarea>
      </div>
      
      <div>
        <button type="submit">Create Project</button>
      </div>
    </form>
@endsection