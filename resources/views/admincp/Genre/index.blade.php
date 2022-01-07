@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Quản lý thể loại</div>
                <a href="{{route ('genre.create')}}" class="btn btn-outline-primary" style="width: 10%; margin: 16px">Thêm Mới</a>
            </div>

            <table class="table" id="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Mô Tả</th>
                        <th scope="col">Trạng Thái</th>
                        <th scope="col">Thao Tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($listGenre as $key => $genre)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$genre->title}}</td>
                        <td>{{$genre->slug}}</td>
                        <td>{{$genre->description}}</td>
                        <td>
                            @if($genre->status)
                            Hiển Thị
                            @else
                            Ẩn
                            @endif
                        </td>
                        <td>
                            {!! Form::open(['method'=>'DELETE','route'=>['genre.destroy', $genre->id], 'onsubmit'=>'return confirm("Xác Nhận Xoá!")']) !!}
                            {!! Form::submit('Xoá', ['class'=> 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                            <a href="{{route('genre.edit', $genre->id)}}" class="btn btn-warning">Chỉnh Sửa</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection