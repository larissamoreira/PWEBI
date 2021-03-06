@extends('layouts.app')

@section('content')
    <h1>Create post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', ])}}
        </div>
        <div class="form-group">
            {{Form::label('themes', 'Themes')}}
            @forelse ($themes as $theme)
                <div class="form-check">
                    {{Form::checkbox($theme->name, $theme->name)}}
                    {{Form::label($theme->name, $theme->name, ['class' => 'form-check-label'])}} 
                </div>
            @empty
                <p>There are no themes yet!</p>
            @endforelse
        </div>
        <div class="form-group">
            {{Form::label('text', 'Text')}}
            {{Form::textarea('text', '', ['class' => 'form-control'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection