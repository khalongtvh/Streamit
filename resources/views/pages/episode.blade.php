@extends('layout')
@section('content')
<div class="video-container iq-main-slider">
    <video class="video d-block" controls loop>
        <source src="{{asset('frontend/video/sample-video.mp4')}}" type="video/mp4">
    </video>
</div>
<section class="movie-detail container-fluid">
    <h4 class="trending-text text-uppercase mt-0" style="font-size: 50px;">{{$movie->title}}</h4>
    <ul class="list-inline p-0 mt-4 share-icons music-play-lists">
        <li><span><i class="fa fa-bookmark-o" aria-hidden="true"></i></span></li>
        <li><span><i class="fa fa-heart-o" aria-hidden="true"></i></span></li>
        <li class="share">
            <span><i class="fa fa-share-square-o" aria-hidden="true"></i></i></span>
            <div class="share-box">
                <div class="d-flex align-items-center">
                    <a href="#" class="share-ico"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#" class="share-ico"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
            </div>
        </li>
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
                            <a style="font-size: 18px;" href="{{route ('genre', $movie->genre->slug) }}">{{$movie->genre->title}}</a>
                        </div>
                        <div class="d-flex align-items-center text-white text-detail episode-name mb-0">
                            <span style="font-size: 18px;">Quốc Gia > </span>
                            <a style="font-size: 18px;" href="{{route ('country', $movie->country->slug) }}">{{$movie->country->title}}</a>
                        </div>
                        <p class="trending-dec w-100 mb-0">{{$movie->description}}</p>

                    </div>
                </div>
            </div>
        </div>
        <div id="episodes" class="tab-pane fade" role="tabpanel">
            <div class="iq-custom-select d-inline-block sea-epi s-margin">
                <select name="cars" class="form-control season-select">
                    <option value="season1"><a href="{{route('profile')}}">Season 1</a></option>
                    <option value="season2">Season 2</option>
                    <option value="season3">Season 3</option>
                </select>
            </div>
        </div>
    </div>
</section>
<section id="iq-tvthrillers" class="s-margin">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 overflow-hidden">
                <div class="iq-main-header d-flex align-items-center justify-content-between">
                    <h4 class="main-title">Recommended For You</h4>
                    <a class="iq-view-all" href="movie-category.html">View All</a>
                </div>
                <div class="tvthrillers-contens">
                    <ul class="favorites-slider list-inline row p-0 mb-0">
                        @foreach($movie_recommented as $key=>$recommnented)
                        <li class="slide-item">
                            <div class="block-images position-relative">
                                <div class="img-box">
                                    <img src="{{asset('backend/uploads/movie/'.$recommnented->image)}}" class="img-fluid" alt="">
                                </div>
                                <div class="block-description">
                                    <h6 class="iq-title"><a href="show-details.html">Day of Darkness</a></h6>
                                    <div class="movie-time d-flex align-items-center my-2">
                                        <div class="badge badge-secondary p-1 mr-2">15+</div>
                                        <span class="text-white">2 Seasons</span>
                                    </div>
                                    <div class="hover-buttons">
                                        <span class="btn btn-hover iq-button"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                            Play Now</span>
                                    </div>
                                </div>
                                <div class="block-social-info">
                                    <ul class="list-inline p-0 m-0 music-play-lists">
                                        <li class="share">
                                            <span><i class="ri-share-fill"></i></span>
                                            <div class="share-box">
                                                <div class="d-flex align-items-center">
                                                    <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>
                                                    <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>
                                                    <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li><span><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                                            <span class="count-box">19+</span>
                                        </li>
                                        <li><span><i class="ri-add-line"></i></span></li>
                                    </ul>
                                </div>
                            </div>

                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection