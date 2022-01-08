@extends('layout')
@section('content')
<section id="home" class="iq-main-slider p-0">
    @include('.elements.slider')
</section>

<div class="main-content">
    <section id="iq-favorites">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 overflow-hidden">
                    @foreach($category_home as $cate_home)
                    <div class="iq-main-header d-flex align-items-center justify-content-between">
                        <h4 class="main-title">{{$cate_home->title}}</h4>
                        <a class="iq-view-all" href="{{route ('category', $cate_home->slug) }}">Xem tất cả</a>
                    </div>
                    <div class="favorites-contens">
                        <ul class="favorites-slider list-inline  row p-0 mb-0">
                            @foreach ($cate_home->movie as $key => $mov)
                            <li class="slide-item">
                                <div class="block-images position-relative">
                                    <div class="img-box" >
                                        <img src="{{asset('backend/uploads/movie/'.$mov->image)}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                        <h6 class="iq-title"><a href="movie-details.html">{{$mov->title}}</a></h6>
                                        <div class="movie-time d-flex align-items-center my-2">
                                            <!-- <div class="badge badge-secondary p-1 mr-2">13+</div>
                                            <span class="text-white">2h 30m</span> -->
                                        </div>
                                        <a class="hover-buttons" href="{{route('movie',$mov->slug)}}">
                                            <span class="btn btn-hover iq-button"><i class="fa fa-play mr-1" aria-hidden="true"></i>Play Now</span>
                                        </a>
                                    </div>
                                    <div class="block-social-info">
                                        <ul class="list-inline p-0 m-0 music-play-lists">
                                            <li class="share">
                                                <span><i class="ri-shape-2-line"></i></span>
                                                <div class="share-box">
                                                    <div class="d-flex align-items-center">
                                                        <a href="https://www.facebook.com/sharer?u=https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-facebook-fill"></i></a>
                                                        <a href="https://twitter.com/intent/tweet?text=Currentlyreading" target="_blank" rel="noopener noreferrer" class="share-ico" tabindex="0"><i class="ri-twitter-fill"></i></a>
                                                        <a href="#" data-link="https://iqonic.design/wp-themes/streamit_wp/movie/shadow/" class="share-ico iq-copy-link" tabindex="0"><i class="ri-links-fill"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <span><i class="ri-heart-fill"></i></span>
                                                <span class="count-box">19+</span>
                                            </li>
                                            <li><span><i class="ri-add-line"></i></span></li>
                                        </ul>
                                    </div>
                                </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
@endsection