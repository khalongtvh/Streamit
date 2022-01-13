@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <center>
                    <h4>Cập nhật tập phim</h4>
                </center>
                <hr>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @if(!isset($episode))
                    {!! Form::open(['route'=>'episode.store','method'=>'POST']) !!}
                    @else
                    {!! Form::open(['route'=>['episode.update', $episode->id],'method'=>'PUT']) !!}
                    @endif

                    <!-- title -->
                    <div class="form-group">
                        {!! Form::label('episode', 'Tên tập phim', []) !!}
                        {!! Form::text('episode', isset($episode) ? $episode->episode : '', ['class'=>'form-control', 'placeholder'=>'ví dụ : Ma Trận Tập 1', 'id'=>'slug','onkeyup'=>'ChangeToSlug()', 'required autocomplete' =>'episode' ]) !!}
                        @error('episode')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- end title -->

                    <!-- slug -->
                    <div class="form-group">
                        {!! Form::label('slug_episode', 'Slug', []) !!}
                        {!! Form::text('slug_episode', isset($episode) ? $episode->slug_episode : '', ['class'=>'form-control', 'placeholder'=>'ma-tran-tap-1', 'id'=>'convert_slug', 'required autocomplete' =>'slug_episode']) !!}
                        @error('slug_episode')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- end slug -->

                    <!-- link_movie -->
                    <div class="form-group">
                        {!! Form::label('link_movie', 'Link', []) !!}
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">https://www.youtube.com/watch?v=</span>
                            </div>
                            {!! Form::text('link_movie', isset($episode) ? $episode->link_movie : '', ['class'=>'form-control', 'placeholder'=>'ví dụ : hoRimjICuqw', 'id'=>'link','required autocomplete' =>'link phim']) !!}
                        </div>
                    </div>

                    <!-- end link -->

                    <!-- movie -->
                    <div class="form-group">
                        {!! Form::label('movie_id', 'Thuộc Phim', []) !!}
                        {!! Form::select('movie_id', $movieList, isset($episode) ? $episode->movie_id : '', ['class'=>'form-control']) !!}
                    </div>
                    <!-- end movie -->
                    @if(isset($episode))
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