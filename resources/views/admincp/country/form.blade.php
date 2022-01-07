@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Quản lý danh sách quốc gia</div>
                <a href="{{route ('country.index')}}" class="btn btn-success" style="width: 10%; margin-top:16px">Liệt Kê</a>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @if(!isset($country))
                    {!! Form::open(['route'=>'country.store','method'=>'POST']) !!}
                    @else
                    {!! Form::open(['route'=>['country.update', $country->id],'method'=>'PUT']) !!}
                    @endif

                    <!-- title -->
                    <div class="form-group">
                        {!! Form::label('title', 'Title', []) !!}
                        {!! Form::text('title', isset($country) ? $country->title : '', ['class'=>'form-control', 'placeholder'=>'nhập dữ liệu', 'id'=>'slug','onkeyup'=>'ChangeToSlug()' ]) !!}
                    </div>
                    <!-- end title -->

                    <!-- slug -->
                    <div class="form-group">
                        {!! Form::label('slug', 'Slug', []) !!}
                        {!! Form::text('slug', isset($country) ? $country->slug : '', ['class'=>'form-control', 'placeholder'=>'nhập dữ liệu', 'id'=>'convert_slug'],) !!}
                    </div>
                    <!-- end slug -->

                    <!-- description -->
                    <div class="form-group">
                        {!! Form::label('description', 'Description', []) !!}
                        {!! Form::textarea('description', isset($country) ? $country->description : '', ['class'=>'form-control', 'placeholder'=>'nhập dữ liệu', 'id'=>'description']) !!}
                    </div>
                    <!-- end description -->

                    <!-- status -->
                    <div class="form-group">
                        {!! Form::label('Active', 'Active', []) !!}
                        {!! Form::select('status', ['1'=>"Hiển Thị", '0'=>"Ẩn"], isset($country) ? $country->status : '', ['class'=>'form-control']) !!}
                    </div>
                    <!-- end status -->
                    @if(isset($country))
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