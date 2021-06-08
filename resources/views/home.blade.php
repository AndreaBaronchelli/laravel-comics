@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="cards">
            @foreach ($comics as $comic)
                <div class="card">
                    <img src="{{$comic['image']}}" alt="{{$comic['title']}}">
                    <div class="title">{{$comic['title']}}</div>
                </div>
            @endforeach
        </div>
        <button>LOAD MORE</button>
    </div>
@endsection
