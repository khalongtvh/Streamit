@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <a href="{{route ('movie.create')}}" class="btn btn-success">Thêm Phim</a>
            <table class="table" id="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Hình Ảnh</th>
                        <th scope="col">Slug</th>
                        <!-- <th scope="col">Mô Tả</th> -->
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
                        <td><img src="{{asset('backend/uploads/movie/'.$movie->image)}}" alt="{{$movie->image}}" width="30%" class="img-thumbnail"></td>
                        <td>{{$movie->slug}}</td>
                        <!-- <td>{{$movie->description}}</td> -->
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
@endsection