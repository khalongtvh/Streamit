@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <center><h4>Quản Lý Phim</h4></center><hr>
            <table class="table" id="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" style="width: 10px;">#</th>
                        <th scope="col">Tên</th>
                        <th scope="col" style="width: 150px;">Hình Ảnh</th>
                        <th scope="col">Slug</th>
                        <th scope="col" style="width: 100px;">Mô Tả</th>
                        <th scope="col">Danh Mục</th>
                        <th scope="col">Thể Loại</th>
                        <th scope="col">Quốc Gia</th>
                        <th scope="col">Trạng Thái</th>
                        <th scope="col">Thao Tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($movieList as $key => $movie)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$movie->title}}</td>
                        <td><img src="{{asset('backend/uploads/movie/'.$movie->image)}}" alt="{{$movie->image}}" width="60%" height="500px" class="img-thumbnail"></td>
                        <td>{{$movie->slug}}</td>
                        <td>
                            <div class="service-items">
                                <div class="row">
                                    <div class="item">
                                        <div class="item-inner">
                                            <h3></h3>
                                            <div class="read-more-cont" style="height: 195px; overflow: hidden; width: 200px;">
                                                {{$movie->description}}
                                            </div>
                                            <button class="btn" type="button" style="color: green;">Read More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>{{$movie->category->title}}</td>
                        <td>{{$movie->genre->title}}</td>
                        <td>{{$movie->country->title}}</td>
                        <td>
                            @if($movie->status)
                            Hiển Thị
                            @else
                            Ẩn
                            @endif
                        </td>
                        <td>
                            {!! Form::open(['method'=>'DELETE','route'=>['movie.destroy', $movie->id], 'onsubmit'=>'return confirm("Xác Nhận Xoá!")']) !!}
                            {!! Form::submit('Xoá', ['class'=> 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                            <a href="{{route('movie.edit', $movie->id)}}" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- read more popup box start -->
<div class="popup-box">
    <div class="popup-content">
        <div class="popup-header">
            <h3></h3>
            <span class="popup-close-icon">&times;</span>
        </div>
        <div class="popup-body">

        </div>
        <div class="popup-footer">
            <button class="btn popup-close-btn">Close</button>
        </div>
    </div>
</div>
<!-- read more popup box end -->
@endsection