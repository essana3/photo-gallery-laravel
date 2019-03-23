@extends('layouts.app')

@section('content')
    <h1>{{$album->name}}</h1>
    <a class="button secondary" href="/">Go Back</a>
    <a class="button" href="/photos/create/{{$album->id}}">Upload Photo to Album</a>
    <hr>
    @if (count($album->photos))
        <div class="seq">
            @foreach($album->photos as $photo)
                <div class="pic">
                    <a href="/photos/{{$photo->id}}">
                        <img class="thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->description}}"
                             style="width: 100%">
                    </a>
                    <br>
                    <h5 style="text-align: center">{{$photo->title}}</h5>
                </div>
            @endforeach
        </div>
    @else
        <p>No photos in this album</p>
    @endif
@endsection
