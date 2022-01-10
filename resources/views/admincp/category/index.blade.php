@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Quản lý thể loại</div>
                <a href="{{route ('category.create')}}" class="btn btn-success">Thêm Mới</a>
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
                    @foreach($listCategory as $key => $category)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$category->title}}</td>
                        <td>{{$category->slug}}</td>
                        <td>{{$category->description}}</td>
                        <td>
                            @if($category->status)
                            Hiển Thị
                            @else
                            Ẩn
                            @endif
                        </td>
                        <td>
                            {!! Form::open(['method'=>'DELETE','route'=>['category.destroy', $category->id], 'onsubmit'=>'return confirm("Xác Nhận Xoá!")']) !!}
                            {!! Form::submit('Xoá', ['class'=> 'btn btn-danger']) !!}
                            {!! Form::close() !!}

                            <a href="{{route('category.edit', $category->id)}}" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection