<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Episode;
use App\Models\Movie;

class EpisodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listEpisode  = Episode::with('movie')->orderBy('id', 'DESC')->get();
        return view('admincp.Episode.index',compact('listEpisode'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movieList = Movie::pluck('title', 'id');
        return view('admincp.Episode.form', compact('movieList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $episode = new Episode();
        $episode->episode = $data['episode'];
        $episode->link_movie = $data['link_movie'];
        $episode->slug_episode = $data['slug_episode'];
        $episode->movie_id = $data['movie_id'];

        $episode->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movieList = Movie::pluck('title', 'id');
        $episode = Episode::find($id);
        return view('admincp.Episode.form', compact('movieList', 'episode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $episode = Episode::find($id);
        $episode->episode = $data['episode'];
        $episode->link_movie = $data['link_movie'];
        $episode->slug_episode = $data['slug_episode'];
        $episode->movie_id = $data['movie_id'];

        $episode->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $episode = Episode::find($id);
        $episode->delete();
        return back();
    }
}
