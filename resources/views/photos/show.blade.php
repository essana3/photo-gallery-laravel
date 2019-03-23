@extends('layouts.app')


@section('content')
    <h3>{{$photo->title}}</h3>
    <p>{{$photo->description}}</p>
    <a class="button secondary" href="/albums/{{$photo->album_id}}">Back to Album</a>
    <hr>
    <img src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->description}}">
    <br><br>
    {!! Form::open(['action' => ['PhotosController@destroy', $photo->id], 'method' => 'post']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete Photo', ['class' => 'button alert']) }}
    {!! Form::close() !!}
    <hr>
    <small>Size: {{$photo->size}}</small>
@endsection
