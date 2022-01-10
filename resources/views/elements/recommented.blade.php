<div class="tvthrillers-contens">
                    <ul class="favorites-slider list-inline row p-0 mb-0">
                        @foreach($movie_recommented as $key=>$recommnented)
                        <li class="slide-item">
                            <div class="block-images position-relative">
                                <div class="img-box">
                                    <img src="{{asset('backend/uploads/movie/'.$recommnented->image)}}" class="img-fluid" alt="">
                                </div>
                                <div class="block-description">
                                    <h6 class="iq-title"><a href="{{route('movie',$recommnented->slug)}}">{{$recommnented->title}}</a></h6>
                                    <div class="movie-time d-flex align-items-center my-2">
                                        <div class="badge badge-secondary p-1 mr-2">15+</div>
                                    </div>
                                    <div class="hover-buttons">
                                        <a href="{{route('movie',$recommnented->slug)}}" class="btn btn-hover iq-button"><i class="fa fa-play mr-1" aria-hidden="true"></i>Play Now</a>
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