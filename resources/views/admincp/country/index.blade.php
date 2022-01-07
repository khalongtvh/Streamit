@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Quản lý danh sách quốc gia</div>
                <a href="{{route ('country.create')}}" class="btn btn-success" style="width: 10%; margin-top:16px">Thêm Mới</a>
            </div>
            <table class="table" id="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Mô Tả</th>
                        <th scope="col">Hiển Thị/Ẩn</th>
                        <th scope="col">Thao Tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($listCountry as $key => $country)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$country->title}}</td>
                        <td>{{$country->slug}}</td>
                        <td>{{$country->description}}</td>
                        <td>
                            @if($country->status)
                            Hiển Thị
                            @else
                            Ẩn
                            @endif
                        </td>
                        <td>
                            {!! Form::open(['method'=>'DELETE','route'=>['country.destroy', $country->id], 'onsubmit'=>'return confirm("Xác Nhận Xoá!")']) !!}
                            {!! Form::submit('Xoá', ['class'=> 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                            <a href="{{route('country.edit', $country->id)}}" class="btn btn-warning">Chỉnh Sửa</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection