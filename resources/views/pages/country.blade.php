@extends('layout')
@section('content')
<div class="container_content container-fluid">
    <h4>Phim {{$country_slug->title}}</h4>
    <main>
        <div class="movies-grid">
            @foreach($movie as $key=>$mov)
            <div class="movie-card">
                <div class="card-head">
                    <img src="{{asset('backend/uploads/movie/'.$mov->image)}}" alt="" class="card-img">
                    <div class="card-overlay">
                        <a class="play" href="{{route('movie',$mov->slug)}}">
                            <ion-icon name="play-circle-outline"></ion-icon>
                        </a>
                    </div>
                </div>
                <a class="card-body" href="{{route('movie',$mov->slug)}}">
                    <h3 class="card-title">{{$mov->title}}</h3>
                </a>
            </div>
            @endforeach
        </div>
    </main>
</div>
@endsection