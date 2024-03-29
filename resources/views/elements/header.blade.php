<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <a href="#" class="navbar-toggler c-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <div class="navbar-toggler-icon" data-toggle="collapse">
                            <span class="navbar-menu-icon navbar-menu-icon--top"></span>
                            <span class="navbar-menu-icon navbar-menu-icon--middle"></span>
                            <span class="navbar-menu-icon navbar-menu-icon--bottom"></span>
                        </div>
                    </a>
                    <a class="navbar-brand" href="{{route ('homepage')}}"><img class="img-fluid logo" src="{{asset('frontend/images/logo.png')}}" alt="streamit" /> </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="menu-main-menu-container">
                            <ul id="top-menu" class="navbar-nav ml-auto">
                                <li class="menu-item">
                                    <a title="Trang Chủ" href="{{route ('homepage')}}">Trang Chủ</a>
                                </li>

                                @foreach($categoryList as $key=>$category)
                                <li class="menu-item">
                                    <a title="{{$category->title}}" href="{{route ('category', $category->slug) }}">{{$category->title}}</a>
                                </li>
                                @endforeach

                                <li class="menu-item">
                                    <a href="#">Thể Loại</a>
                                    <ul class="sub-menu">
                                        @foreach($genreList as $key=>$genre)
                                        <li class="menu-item">
                                            <a title="{{$genre->description}}" href="{{route ('genre', $genre->slug)}}">{{$genre->title}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>

                                <li class="menu-item">
                                    <a href="#">Quốc Gia</a>
                                    <ul class="sub-menu">
                                        @foreach($countryList as $key=>$country)
                                        <li class="menu-item">
                                            <a title="{{$country->description}}" href="{{route ('country', $country->slug)}}">{{$country->title}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="navbar-right menu-right">
                        <ul class="d-flex align-items-center list-inline m-0">
                            <!-- search -->
                            <li class="nav-item nav-icon">
                                <!-- Search form -->
                                <a href="#" class="search-toggle device-search">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </a>
                                <div class="search-box iq-search-bar d-search">
                                    <form action="#" class="searchbox">
                                        <div class="form-group position-relative">
                                            <input type="text" id="search" class="text search-input font-size-12" placeholder="Gõ vào đây để tìm kiếm..." name="search">
                                            <div class="iq-sub-dropdown">
                                                <div class="iq-card shadow-none m-0">
                                                    <div class="iq-card-body" id="result_seach">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <!-- bookmark -->
                            <li class="nav-item nav-icon">
                                <a href="{{route('show_cart')}}" title="Phim đã lưu">
                                    <i class="fa fa-bookmark-o" aria-hidden="true" style="font-size: 20px;"></i>
                                </a>
                            </li>

                            <!-- user -->
                            <!-- <li class="nav-item nav-icon">
                                <a href="#" class="iq-user-dropdown search-toggle p-0 d-flex align-items-center" data-toggle="search-toggle">
                                    <img src="{{asset('frontend/images/user/user.jpg')}}" class="img-fluid avatar-40 rounded-circle" alt="user">
                                </a>
                                <div class="iq-sub-dropdown iq-user-dropdown">
                                    <div class="iq-card shadow-none m-0">
                                        <div class="iq-card-body p-0 pl-3 pr-3">
                                            <a href="{{route('profile')}}" class="iq-sub-card setting-dropdown">
                                                <div class="media align-items-center">
                                                    <div class="right-icon">
                                                        <i class="fa fa-user-o" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="my-0 ">Quản lý tài khoản</h6>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{route('login_user')}}" class="iq-sub-card setting-dropdown">
                                                <div class="media align-items-center">
                                                    <div class="right-icon">
                                                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="media-body ml-3">
                                                        <h6 class="my-0 ">Đăng Xuất</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li> -->
                        </ul>
                    </div>

                    <div class="mobile-more-menu">
                        <a href="javascript:void(0);" class="more-toggle" id="dropdownMenuButton" data-toggle="more-toggle" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-more-line"></i>
                        </a>
                        <div class="more-menu" aria-labelledby="dropdownMenuButton">
                            <div class="navbar-right position-relative">
                                <ul class="d-flex align-items-center justify-content-end list-inline m-0">
                                    <li>
                                        <a href="#" class="search-toggle">
                                            <i class="ri-search-line"></i>
                                        </a>
                                        <div class="search-box iq-search-bar">
                                            <form action="#" class="searchbox">
                                                <div class="form-group position-relative">
                                                    <input type="text" class="text search-input font-size-12" placeholder="type here to search..." id="search">
                                                    <i class="search-link ri-search-line"></i>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="nav-item nav-icon">
                                        <a href="#" class="search-toggle position-relative">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" class="noti-svg">
                                                <path fill="none" d="M0 0h24v24H0z" />
                                                <path d="M18 10a6 6 0 1 0-12 0v8h12v-8zm2 8.667l.4.533a.5.5 0 0 1-.4.8H4a.5.5 0 0 1-.4-.8l.4-.533V10a8 8 0 1 1 16 0v8.667zM9.5 21h5a2.5 2.5 0 1 1-5 0z" />
                                            </svg>
                                            <span class="bg-danger dots"></span>
                                        </a>
                                        <div class="iq-sub-dropdown">
                                            <div class="iq-card shadow-none m-0">
                                                <div class="iq-card-body">
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <img src="{{asset('frontend/images/notify/thumb-1.jpg')}}" class="img-fluid mr-3" alt="streamit" />
                                                            <div class="media-body">
                                                                <h6 class="mb-0 ">Boop Bitty</h6>
                                                                <small class="font-size-12"> just now</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <img src="{{asset('frontend/images/notify/thumb-2.jpg')}}" class="img-fluid mr-3" alt="streamit" />
                                                            <div class="media-body">
                                                                <h6 class="mb-0 ">The Last Breath</h6>
                                                                <small class="font-size-12">15 minutes ago</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <img src="{{asset('frontend/images/notify/thumb-3.jpg')}}" class="img-fluid mr-3" alt="streamit" />
                                                            <div class="media-body">
                                                                <h6 class="mb-0 ">The Hero Camp</h6>
                                                                <small class="font-size-12">1 hour ago</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="iq-user-dropdown search-toggle d-flex align-items-center">
                                            <img src="{{asset('frontend/images/user/user.jpg')}}" class="img-fluid avatar-40 rounded-circle" alt="user">
                                        </a>
                                        <div class="iq-sub-dropdown iq-user-dropdown">
                                            <div class="iq-card shadow-none m-0">
                                                <div class="iq-card-body p-0 pl-3 pr-3">
                                                    <a href="manage-profile.html" class="iq-sub-card setting-dropdown">
                                                        <div class="media align-items-center">
                                                            <div class="right-icon">
                                                                <i class="ri-file-user-line text-primary"></i>
                                                            </div>
                                                            <div class="media-body ml-3">`
                                                                <h6 class="mb-0 ">Manage Profile</h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="setting.html" class="iq-sub-card setting-dropdown">
                                                        <div class="media align-items-center">
                                                            <div class="right-icon">
                                                                <i class="ri-settings-4-line text-primary"></i>
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0 ">Settings</h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="pricing-plan.html" class="iq-sub-card setting-dropdown">
                                                        <div class="media align-items-center">
                                                            <div class="right-icon">
                                                                <i class="ri-settings-4-line text-primary"></i>
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0 ">Pricing Plan</h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="login.html" class="iq-sub-card setting-dropdown">
                                                        <div class="media align-items-center">
                                                            <div class="right-icon">
                                                                <i class="ri-logout-circle-line text-primary"></i>
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0">Logout</h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="nav-overlay"></div>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    $(document).ready(function() {
        $(document).on('keyup', '#search', function() {
            var query = $(this).val();
            if (query == '') {
                $('#result_seach').html('');
            }
            $.ajax({
                url: "{{ route('live_search.action') }}",
                method: 'GET',
                data: {
                    query: query
                },
                dataType: 'json',
                success: function(data) {
                    $('#result_seach').html(data.result_data);
                }
            })
        });
    });
</script>