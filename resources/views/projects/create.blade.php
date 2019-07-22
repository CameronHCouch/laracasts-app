@extends('layout')
{{-- sections can be filled inline using the below syntax; this is great for smaller changes --}}
@section('title', 'Create a New Project')   

@section('content')
{{-- {{}} sanitizes inputs, treating them as plaintext --}}
{{-- to add code here, instead use {!! $foo !!} --}}
{{-- adding required to form inputs uses client-side validation to handle missing data, but this is not sufficient to preventing errors. For this reason, we add validations to the project controller! --}}
    <h1>Create a new Project!</h1>
    <form method="POST" action="/projects">
      {{ csrf_field() }}
      <div>
        <input type="text" name="title" placeholder="Project title" value= {{ old('title') }}>
      </div>
      
      <div>
        <textarea name="description" placeholder="Project description" >{{ old('description') }} </textarea>
      </div>
      
      <div>
        <button type="submit">Create Project</button>
      </div>
    </form>

    @if ($errors->any())
      <div class="errors">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
@endsection