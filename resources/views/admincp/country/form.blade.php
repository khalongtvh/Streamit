@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <center>
                    <h4>Cập nhật danh sách quốc gia</h4>
                </center>
                <hr>
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
                        {!! Form::text('title', isset($country) ? $country->title : '', ['class'=>'form-control', 'placeholder'=>'ví dụ : Việt Nam', 'id'=>'slug','onkeyup'=>'ChangeToSlug()', 'required autocomplete' =>'title' ]) !!}
                    
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- end title -->

                    <!-- slug -->
                    <div class="form-group">
                        {!! Form::label('slug', 'Slug', []) !!}
                        {!! Form::text('slug', isset($country) ? $country->slug : '', ['class'=>'form-control', 'placeholder'=>'ví dụ : viet-nam', 'id'=>'convert_slug', 'required autocomplete' =>'slug']) !!}
                    
                        @error('slug')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- end slug -->

                    <!-- description -->
                    <div class="form-group">
                        {!! Form::label('description', 'Description', []) !!}
                        {!! Form::textarea('description', isset($country) ? $country->description : '', ['class'=>'form-control', 'placeholder'=>'ví dụ : Phim Việt Nam', 'id'=>'description','required autocomplete' =>'mô tả']) !!}
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