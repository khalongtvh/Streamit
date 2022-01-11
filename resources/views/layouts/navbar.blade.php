<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('home')}}">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('movie.index')}}">Phim</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('category.index')}}">Danh Mục</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('genre.index')}}">Thể Loại</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('country.index')}}">Quốc Gia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('episode.index')}}">Tập Phim</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('banner.create')}}">Banner</a>
            </li>
        </ul>
        <!-- <form class="my-2 my-lg-0 form-search"> -->
            <!-- <input class="form-control mr-sm-2 input_search_ajax" type="search" id="input_search_ajax" placeholder="Tìm kiếm phim" aria-label="Search"> -->
            <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm Kiếm</button> -->
        <!-- </form> -->
    </div>
</nav>