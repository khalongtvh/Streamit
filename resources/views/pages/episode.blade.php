@extends('layout')
@section('content')
<style>
    .button {
        border: none;
        cursor: pointer;
        border-radius: 50%;
        color: white;
    }
</style>
<div class="video-container iq-main-slider">
    <p align="center">
        <iframe width="100%" height="500" src="https://www.youtube.com/embed/{!! $episode->link_movie !!}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </p>
</div>
<section class="movie-detail container-fluid">
    <h4 class="trending-text text-uppercase mt-0" style="font-size: 40px;">{{$episode->movie->title}}</h4>
    <ul class="ratting-start list-inline d-flex align-items-center justify-content-left" title="Average Rating">
        @for($count = 1; $count<=5; $count++) 
        @php 
        if($count <=$rating)
        { $color='color:#ffcc00;' ; }
        else{ $color='color:#ccc;' ; } 
        @endphp 
        <li title="Đánh giá theo sao" 
            id="{{$episode->movie->id}}-{{$count}}" 
            data-index="{{$count}}" 
            data-movie_id="{{$episode->movie->id}}" 
            data-rating="{{$rating}}"
            class="rating"
            style="cursor: pointer;{{$color}} font-size:30px;">&#9733;
        </li>
        @endfor
        <li>({{$rating}}/5)</li>
    </ul>
    <ul class="list-inline p-0 mt-4 share-icons music-play-lists">
        <form action="{{URL::to('/save-cart')}}" method="POST">
            {{csrf_field()}}
            <input name="movieid_hidden" type="hidden" value="{{$episode->movie->id}}" />
            <input name="movietitle_hidden" type="hidden" value="{{$episode->movie->title}}" />
            <input name="movieimage_hidden" type="hidden" value="{{$episode->movie->image}}" />
            <li>
                <button class="button"><span><i class="fa fa-bookmark-o" aria-hidden="true"></i></span></i></button>
            </li>
            <li class="share">
                <span><i class="fa fa-share-square-o" aria-hidden="true"></i></i></span>
                <div class="share-box">
                    <div class="d-flex align-items-center">
                        <div data-href="{{\URL::current()}}" data-layout="box_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F127.0.0.1%3A8000%2Fepisodes%2Ftap-1&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
                        <div class="zalo-share-button" data-href="" data-oaid="579745863508352884" data-layout="2" data-color="white" data-customize="false">s</div>
                    </div>
                </div>
            </li>
        </form>
    </ul>
</section>

<section class="container-fluid seasons">
    <ul class="trending-pills d-flex nav nav-pills align-items-center text-center s-margin" role="tablist">
        <li class="nav-item">
            <a class="nav-link active show" data-toggle="pill" href="#info_movie" role="tab" aria-selected="true">Thông tin phim</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#episodes" role="tab" aria-selected="false">Tập phim</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#comments" role="tab" aria-selected="false">Bình luận</a>
        </li>
    </ul>
    <div class="tab-content">
        <div id="info_movie" class="tab-pane fade active show" role="tabpanel">
            <div class="row" id="info_movsie">
                <div class="col-lg-12">
                    <div class="trending-info season-info g-border">
                        <div class="d-flex align-items-center text-white text-detail episode-name mb-0">
                            <span style="font-size: 18px;"> Điểm IMDb > </span>
                            <spans tyle="font-size: 18px;"> 8.0</spans>
                        </div>
                        <div class="d-flex align-items-center text-white text-detail episode-name mb-0">
                            <span style="font-size: 18px;">Thể Loại > </span>
                            <a style="font-size: 18px;" href="{{route ('genre', $episode->movie->genre->slug) }}">{{$episode->movie->genre->title}}</a>
                        </div>
                        <div class="d-flex align-items-center text-white text-detail episode-name mb-0">
                            <span style="font-size: 18px;">Quốc Gia > </span>
                            <a style="font-size: 18px;" href="{{route ('country', $episode->movie->country->slug) }}">{{$episode->movie->country->title}}</a>
                        </div>
                        <p class="trending-dec w-100 mb-0">{{$episode->movie->description}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="episodes" class="tab-pane fade" role="tabpanel">
            @foreach($all_episode as $key=>$epi)
            <a class="btn btn-hover iq-button" href="{{url('episodes/'.$epi->slug_episode)}}"><i class="fa fa-play mr-1" aria-hidden="true"></i>{{$key+1}}</a>
            @endforeach
        </div>
        <div id="comments" class="tab-pane fade" role="tabpanel">
            <div class="fb-comments" data-href="{{\URL::current()}}" data-width="100%" data-numposts="10" style="background-color: white; color: white;"></div>
        </div>
</section>

<section id="iq-tvthrillers" class="s-margin">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 overflow-hidden">
                <div class="iq-main-header d-flex align-items-center justify-content-between">
                    <h4 class="main-title">Phim thể loại tương tự</h4>
                    <a class="iq-view-all" href="{{route ('genre', $episode->movie->genre->slug)}}">Xem tất cả</a>
                </div>
                @include('elements.recommented')
            </div>
        </div>
    </div>
</section>
@endsection