@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <a href="{{route ('episode.create')}}" class="btn btn-success">Thêm Phim</a>
            <table class="table" id="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Slug</th>
                        <th scope="col">link tập phim</th>
                        <th scope="col">Thuộc phim</th>
                        <th scope="col">Thao Tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($listEpisode as $key => $episode)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$episode->episode}}</td>
                        <td>{{$episode->slug_episode}}</td>
                        <td>{{$episode->link_movie}}</td>
                        <td>{{$episode->movie->title}}</td>
                        <td>
                            {!! Form::open(['method'=>'DELETE','route'=>['episode.destroy', $episode->id], 'onsubmit'=>'return confirm("Xác Nhận Xoá!")']) !!}
                            {!! Form::submit('Xoá', ['class'=> 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                            <a href="{{route('episode.edit', $episode->id)}}" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection