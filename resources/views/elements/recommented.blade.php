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
                        <div class="badge badge-secondary p-1 mr-2">{{$recommnented->age}}</div>
                    </div>
                    <div class="hover-buttons">
                        <a href="{{route('movie',$recommnented->slug)}}" class="btn btn-hover iq-button"><i class="fa fa-play mr-1" aria-hidden="true"></i>Play Now</a>
                    </div>
                </div>
                <div class="block-social-info">
                    <ul class="list-inline p-0 m-0 music-play-lists">
                        <form action="{{URL::to('/save-cart')}}" method="POST">
                            {{csrf_field()}}
                            <input name="movieid_hidden" type="hidden" value="{{$recommnented->id}}" />
                            <input name="movietitle_hidden" type="hidden" value="{{$recommnented->title}}" />
                            <input name="movieimage_hidden" type="hidden" value="{{$recommnented->image}}" />
                            <li>
                                <button class="button_bookmark"><span><i class="fa fa-bookmark-o" aria-hidden="true"></i></span></i></button>
                            </li>
                            <li class="share">
                                <span><i class="fa fa-share-square-o" aria-hidden="true"></i></i></span>
                                <div class="share-box">
                                    <div class="d-flex align-items-center">
                                        <div data-href="{{\URL::current()}}" data-layout="box_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F127.0.0.1%3A8000%2Fepisodes%2Ftap-1&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
                                    </div>
                                </div>
                            </li>
                        </form>
                    </ul>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>