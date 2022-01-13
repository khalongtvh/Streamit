<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Phim
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('movie.index')}}">Liệt kê phim</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route ('movie.create')}}">Thêm phim</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route ('episode.index')}}">Liệt kê tập phim</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route ('episode.create')}}">Thêm tập phim</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Danh Mục
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('category.index')}}">Liệt Kê</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route ('category.create')}}">Thêm mới</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Thể Loại
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('genre.index')}}">Liệt Kê</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route ('genre.create')}}">Thêm mới</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Quốc Gia
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('country.index')}}">Liệt Kê</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route ('country.create')}}">Thêm mới</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Banner
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('banner.index')}}">Liệt Kê</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route ('banner.create')}}">Thêm mới</a>
                </div>
            </li>
        </ul>
    </div>
</nav>