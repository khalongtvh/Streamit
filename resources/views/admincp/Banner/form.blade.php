@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <center><h4>Quản lý banner</h4></center><hr>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @if(!isset($banner))
                    {!! Form::open(['route'=>'banner.store','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
                    @else
                    {!! Form::open(['route'=>['banner.update', $banner->id],'method'=>'PUT', 'enctype'=>'multipart/form-data']) !!}
                    @endif
                    <!-- movie -->
                    <div class="form-group">
                        {!! Form::label('movie_id', 'Thuộc Phim', []) !!}
                        {!! Form::select('movie_id', $movieList, isset($banner) ? $banner->movie_id : '', ['class'=>'form-control']) !!}
                    </div>
                    <!-- end movie -->

                    <!-- status -->
                    <div class="form-group">
                        {!! Form::label('Active', 'Trạng thái', []) !!}
                        {!! Form::select('status', ['1'=>"Hiển Thị", '0'=>"Ẩn"], isset($banner) ? $banner->status : '', ['class'=>'form-control']) !!}
                    </div>
                    <!-- end status -->

                    <!-- image -->
                    <div class="form-group">
                        {!! Form::label('Image', 'Image', []) !!}
                        {!! Form::file('image', ['class'=>'form-control-file']) !!}

                        @if(isset($banner))
                        <img src="{{asset('backend/uploads/banner/'.$banner->image)}}" alt="{{$banner->image}}" width="10%" class="img-thumbnail">
                        @endif
                    </div>
                    <!-- end image -->
                    @if(isset($banner))
                    {!! Form::submit('Cập Nhật', ['class'=>'btn btn-success']) !!}
                    @else
                    {!! Form::submit('Lưu', ['class'=>'btn btn-success']) !!}
                    @endif
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection