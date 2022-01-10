@extends('layout')
@section('content')
<div class="container_content">
    <?php
    $content = Cart::content();
    ?>
    <h4 class="container-fluid">Phim đã lưu</h4>
    <main>
        <div class="movies-grid container-fluid">
            @foreach($content as $v_content)
            <div class="movie-card">
                <div class="card-head">
                    <img src="{{asset('backend/uploads/movie/'.$v_content->options->image)}}" alt="" class="card-img">
                    <div class="card-overlay">
                        <div class="bookmark">
                            <ion-icon name="bookmark-outline"></ion-icon>
                        </div>
                        <div class="rating">
                            <ion-icon name="star-outline"></ion-icon>
                            <span>7.4</span>
                        </div>
                        <a class="play" href="{{route('movie',$v_content->options->slug)}}">
                            <ion-icon name="play-circle-outline"></ion-icon>
                        </a>
                    </div>
                </div>
                <a class="card-body" href="{{route('movie',$v_content->options->slug)}}">
                    <h3 class="card-title">{{$v_content->name}}</h3>
                </a>
            </div>
            <a href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}" class="cart_quantity_delete"></a>
            @endforeach
        </div>
    </main>
</div>
@endsection