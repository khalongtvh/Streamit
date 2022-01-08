<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Models\Movie;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bannerList = Banner::with('movie')->orderBy('id', 'DESC')->get();
        return view('admincp.Banner.index', compact('bannerList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movieList = Movie::pluck('title', 'id');
        return view('admincp.Banner.form', compact('movieList'));
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

        $movie = new Banner();
        $movie->status = $data['status'];
        $movie->movie_id = $data['movie_id'];
        $movie->image = $data['movie_id'];

        $get_image = $request->file('image');

        $path = 'backend/uploads/banner';

        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 9999) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $movie->image = $new_image;
        }

        $movie->save();
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
        $banner = Banner::find($id);
        return view('admincp.Banner.form', compact('movieList', 'banner'));
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
        
        $banner = Banner::find($id);
        $banner->status = $data['status'];
        $banner->movie_id = $data['movie_id'];
        
        $get_image = $request->file('image');

        if ($get_image) {
            if (!empty($banner->image)) {
                unlink('backend/uploads/banner/' . $banner->image);
            }
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 9999) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('backend/uploads/banner/', $new_image);
            $banner->image = $new_image;
        }
        
        $banner->save();
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
        $banner = Banner::find($id);
        if (!empty($banner->image)) {
            unlink('backend/uploads/banner/' . $banner->image);
        }
        $banner->delete();
        return back();
    }
}
