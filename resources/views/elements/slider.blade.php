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
                        <div class="trending-list" data-animation-in="fadeInUp" data-delay-in="1.2">
                            <div class="text-primary title genres">
                                Thể Loại: <span class="text-body">{{$banner->movie->genre->title}}</span>
                            </div>
                            <div class="text-primary title tag">
                                Tag: <span class="text-body">{{$banner->movie->category->title}}</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1.2">
                            <a href="{{route('movie',$banner->movie->slug)}}" class="btn btn-hover iq-button"><i class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                            <a href="{{route('movie',$banner->movie->slug)}}" class="btn btn-link">More details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- <div class="slide slick-bg s-bg-2">
        <div class="container-fluid position-relative h-100">
            <div class="slider-inner h-100">
                <div class="row align-items-center  h-100">
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <a href="javascript:void(0);">
                            <div class="channel-logo" data-animation-in="fadeInLeft">
                                <img src="frontend/images/logo.png" class="c-logo" alt="streamit">
                            </div>
                        </a>
                        <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft">sail coaster</h1>

                        <div class="d-flex flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft" style="opacity: 1;">
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
                                <span class="badge badge-secondary p-2">16+</span>
                                <span class="ml-3">2h 40m</span>
                            </div>
                        </div>
                        <p data-animation-in="fadeInUp" data-delay-in="0.7">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                            dummy text ever since the 1500s.
                        </p>
                        <div class="trending-list" data-wp_object-in="fadeInUp" data-delay-in="1.2">
                            <div class="text-primary title starring">
                                Starring: <span class="text-body">Karen Gilchrist, James Earl Jones</span>
                            </div>
                            <div class="text-primary title genres">
                                Genres: <span class="text-body">Action</span>
                            </div>
                            <div class="text-primary title tag">
                                Tag: <span class="text-body">Action, Adventure, Horror</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1">
                            <a href="#" class="btn btn-hover iq-button"><i class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                            <a href="#" class="btn btn-link">More details</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-12 col-md-12 trailor-video">
                    <a href="frontend/video/trailer.mp4" class="video-open playbtn">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                            <polygon class='triangle' fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="73.5,62.5 148.5,105.8 73.5,149.1 " />
                            <circle class='circle' fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3" />
                        </svg>
                        <span class="w-trailor">Watch Trailer</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="slide slick-bg s-bg-3">
        <div class="container-fluid position-relative h-100">
            <div class="slider-inner h-100">
                <div class="row align-items-center  h-100">
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <a href="javascript:void(0);">
                            <div class="channel-logo" data-animation-in="fadeInLeft">
                                <img src="frontend/images/logo.png" class="c-logo" alt="streamit">
                            </div>
                        </a>
                        <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft">the army</h1>

                        <div class="d-flex flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft" style="opacity: 1;">
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
                                <span class="badge badge-secondary p-2">20+</span>
                                <span class="ml-3">3h</span>
                            </div>
                        </div>


                        <p data-animation-in="fadeInUp" data-delay-in="1.2" class="fadeInUp animated" style="opacity: 1; animation-delay: 1.2s;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                            dummy text ever since the 1500s.
                        </p>
                        <div class="trending-list" data-wp_object-in="fadeInUp" data-delay-in="1.2">
                            <div class="text-primary title starring">
                                Starring: <span class="text-body">Karen Gilchrist, James Earl Jones</span>
                            </div>
                            <div class="text-primary title genres">
                                Genres: <span class="text-body">Action</span>
                            </div>
                            <div class="text-primary title tag">
                                Tag: <span class="text-body">Action, Adventure, Horror</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center r-mb-23" data-animation-in="fadeInUp" data-delay-in="1">
                            <a href="#" class="btn btn-hover iq-button"><i class="fa fa-play mr-2" aria-hidden="true"></i>Play Now</a>
                            <a href="#" class="btn btn-link">More details</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-12 col-md-12 trailor-video">
                    <a href="frontend/video/trailer.mp4" class="video-open playbtn">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80px" height="80px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                            <polygon class='triangle' fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="73.5,62.5 148.5,105.8 73.5,149.1 " />
                            <circle class='circle' fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3" />
                        </svg>
                        <span class="w-trailor">Watch Trailer</span>
                    </a>
                </div>
            </div>
        </div>
    </div> -->
</div>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" width="44px" height="44px" id="circle" fill="none" stroke="currentColor">
        <circle r="20" cy="22" cx="22" id="test"></circle>
    </symbol>
</svg>