@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <center>
                    <h4>Cập nhật danh mục</h4>
                </center>
                <hr>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @if(!isset($category))
                    {!! Form::open(['route'=>'category.store','method'=>'POST']) !!}
                    @else
                    {!! Form::open(['route'=>['category.update', $category->id],'method'=>'PUT']) !!}
                    @endif

                    <!-- title -->
                    <div class="form-group">
                        {!! Form::label('title', 'Title', []) !!}
                        {!! Form::text('title', isset($category) ? $category->title : '', ['class'=>'form-control', 'placeholder'=>'nhập dữ liệu', 'id'=>'slug','onkeyup'=>'ChangeToSlug()'] ) !!}
                    </div>
                    <!-- end title -->

                    <!-- slug -->
                    <div class="form-group">
                        {!! Form::label('slug', 'Slug', []) !!}
                        {!! Form::text('slug', isset($category) ? $category->slug : '', ['class'=>'form-control', 'placeholder'=>'nhập dữ liệu', 'id'=>'convert_slug'],) !!}
                    </div>
                    <!-- end slug -->

                    <!-- description -->
                    <div class="form-group">
                        {!! Form::label('description', 'Description', []) !!}
                        {!! Form::textarea('description', isset($category) ? $category->description : '', ['class'=>'form-control', 'placeholder'=>'nhập dữ liệu', 'id'=>'description']) !!}
                    </div>
                    <!-- end  description -->

                    <!-- status -->
                    <div class="form-group">
                        {!! Form::label('Active', 'Active', []) !!}
                        {!! Form::select('status', ['1'=>"Hiển Thị", '0'=>"Ẩn"], isset($category) ? $category->status : '', ['class'=>'form-control']) !!}
                    </div>
                    <!-- end status -->
                    @if(isset($category))
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