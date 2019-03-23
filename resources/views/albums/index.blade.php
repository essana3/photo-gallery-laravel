@extends('layouts.app')


@section('content')
    @if (count($albums))
        <h1>Albums</h1>
        <div class="seq">
            @foreach($albums as $album)
                <div class="pic">
                    <a href="/albums/{{$album->id}}">
                        <img src="storage/album_covers/{{$album->cover_image}}" alt="{{$album->description}}" style="width: 100%">
                    </a>
                    <br>
                    <h5>{{$album->name}}</h5>
                </div>
            @endforeach
        </div>
    @else
        <p>No albums to display</p>
    @endif
@endsection
