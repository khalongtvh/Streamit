<div id="home-slider" class="slider m-0 p-0">
    @foreach($bannerList as $banner)
    <div class="slide slick-bg s-bg-1" style="position: relative;">
        <img class="d-block w-100" src="{{asset('backend/uploads/banner/'.$banner->image)}}" alt="{{$banner->movie->title}}" style="position: absolute;">
        <div class="container-fluid position-relative h-100">
            <div class="slider-inner h-100">
                <div class="row align-items-center  h-100">
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <a href="javascript:void(0);">
                            <div class="channel-logo" data-animation-in="fadeInLeft" data-delay-in="0.5">
                                <img src="frontend/images/logo.png" class="c-logo" alt="streamit">
                            </div>
                        </a>
                        <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft" data-delay-in="0.6">{{$banner->movie->title}}</h1>
                        <!-- <div class="d-flex flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft" style="opacity: 1;">
                            <div class="slider-ratting d-flex align-items-center mr-4 mt-2 mt-md-3">
                                <ul class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                                    <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star-half" aria-hidden="true"></i>
                                    </li>
                                </ul>
                                <span class="text-white ml-2">4.7(lmdb)</span>
                            </div>
                            <div class="d-flex align-items-center mt-2 mt-md-3">
                                <span class="badge badge-secondary p-2">18+</span>
                                <span class="ml-3">2 Seasons</span>
                            </div>
                        </div> -->
                        <div class="trending-list" data-animation-in="fadeInUp" data-delay-in="0.5">
                            <div class="text-primary title genres">
                                Thể Loại: <span class="text-body">{{$banner->movie->genre->title}}</span>
                            </div>
                            <div class="text-primary title tag">
                                Tag: <span class="text-body">{{$banner->movie->category->title}}</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="0.5">
                            <a href="{{route('movie',$banner->movie->slug)}}" class="btn btn-hover iq-button"><i class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                            <a href="{{route('movie',$banner->movie->slug)}}" class="btn btn-link">More details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle" fill="none" stroke="currentColor">
        <circle r="20" cy="22" cx="22" id="test"></circle>
    </symbol>
</svg>