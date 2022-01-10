@extends('layout')
@section('content')
<iframe width="100%" height="500" src="{!! $episode->link_movie !!}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

@foreach($all_episode as $key=>$episode)
<p>{{$key+1}}</p>
@endforeach
@endsection