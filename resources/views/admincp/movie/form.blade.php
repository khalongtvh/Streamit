@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <center><h4>Thêm phim mới</h4></center><hr>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @if(!isset($Movie))
                    {!! Form::open(['route'=>'movie.store','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
                    @else
                    {!! Form::open(['route'=>['movie.update', $Movie->id],'method'=>'PUT', 'enctype'=>'multipart/form-data']) !!}
                    @endif
                    <!-- title -->
                    <div class="form-group">
                        {!! Form::label('title', 'Title', []) !!}
                        {!! Form::text('title', isset($Movie) ? $Movie->title : '', ['class'=>'form-control', 'placeholder'=>'nhập dữ liệu', 'id'=>'slug','onkeyup'=>'ChangeToSlug()'] ) !!}
                    </div>
                    <!-- end title -->

                    <!-- slug -->
                    <div class="form-group">
                        {!! Form::label('slug', 'Slug', []) !!}
                        {!! Form::text('slug', isset($Movie) ? $Movie->slug : '', ['class'=>'form-control', 'placeholder'=>'nhập dữ liệu', 'id'=>'convert_slug'],) !!}
                    </div>
                    <!-- end slug -->

                    <!-- Age -->
                    <div class="form-group">
                        {!! Form::label('Độ tuổi', 'Age', []) !!}
                        {!! Form::select('age', ['13+'=>'13+', '16+'=>'16+', '18+'=>'18+'], isset($Movie) ? $Movie->age : '', ['class'=>'form-control']) !!}
                    </div>
                    <!-- end Age -->

                    <!-- time -->
                    <div class="form-group">
                        {!! Form::label('Thời lượng', 'Time', []) !!}
                        {!! Form::text('time', isset($Movie) ? $Movie->time : '', ['class'=>'form-control', 'placeholder'=>'tính theo phút (ví dụ : 75 phút)'] ) !!}
                    </div>
                    <!-- end time -->

                    <!-- description -->
                    <div class="form-group">
                        {!! Form::label('description', 'Description', []) !!}
                        {!! Form::textarea('description', isset($Movie) ? $Movie->description : '', ['class'=>'form-control', 'placeholder'=>'nhập dữ liệu', 'id'=>'description']) !!}
                    </div>
                    <!-- end description -->

                    <!-- link_movie -->
                    <div class="form-group">
                        {!! Form::label('trailer_link', 'trailer_link', []) !!}
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">https://www.youtube.com/watch?v=</span>
                            </div>
                            {!! Form::text('trailer_link', isset($Movie) ? $Movie->trailer_link : '', ['class'=>'form-control', 'placeholder'=>'hoRimjICuqw', 'id'=>'trailer_link']) !!}
                        </div>
                    </div>

                    <!-- end link -->

                    <!-- category -->
                    <div class="form-group">
                        {!! Form::label('Category', 'Category', []) !!}
                        {!! Form::select('category_id', $categoryList, isset($Movie) ? $Movie->category_id : '', ['class'=>'form-control']) !!}
                    </div>
                    <!-- end category -->

                    <!-- Genre -->
                    <div class="form-group">
                        {!! Form::label('Genre', 'Genre', []) !!}
                        {!! Form::select('genre_id', $genreList, isset($Movie) ? $Movie->genre_id : '', ['class'=>'form-control']) !!}
                    </div>
                    <!-- end Genre -->

                    <!-- Contry -->
                    <div class="form-group">
                        {!! Form::label('Contry', 'Contry', []) !!}
                        {!! Form::select('country_id', $countryList, isset($Movie) ? $Movie->country_id : '', ['class'=>'form-control']) !!}
                    </div>
                    <!-- end Contry -->

                    <!-- status -->
                    <div class="form-group">
                        {!! Form::label('Active', 'Active', []) !!}
                        {!! Form::select('status', ['1'=>"Hiển Thị", '0'=>"Ẩn"], isset($Movie) ? $Movie->status : '', ['class'=>'form-control']) !!}
                    </div>
                    <!-- end status -->
                    
                    <!-- image -->
                    <div class="form-group">
                        {!! Form::label('Image', 'Image', []) !!}
                        {!! Form::file('image', ['class'=>'form-control-file']) !!}

                        @if(isset($Movie))
                            <img src="{{asset('backend/uploads/movie/'.$Movie->image)}}" alt="{{$Movie->image}}" width="10%" class="img-thumbnail">
                        @endif
                    </div>
                    <!-- end image -->
                    @if(isset($Movie))
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