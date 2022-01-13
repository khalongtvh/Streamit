@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <center><h4>Quản lý banner</h4></center><hr>
            <table class="table" id="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Hình Ảnh</th>
                        <th scope="col">Thuộc phim</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Thao Tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bannerList as $key => $banner)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td><img src="{{asset('backend/uploads/banner/'.$banner->image)}}" alt="{{$banner->image}}" width="30%" class="img-thumbnail"></td>
                        <td>{{$banner->movie->title}}</td>
                        <td>
                            @if($banner->status)
                            Hiển Thị
                            @else
                            Ẩn
                            @endif
                        </td>
                        <td>
                            {!! Form::open(['method'=>'DELETE','route'=>['banner.destroy', $banner->id], 'onsubmit'=>'return confirm("Xác Nhận Xoá!")']) !!}
                            {!! Form::submit('Xoá', ['class'=> 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                            <a href="{{route('banner.edit', $banner->id)}}" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection