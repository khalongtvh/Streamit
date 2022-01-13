<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;
use App\Models\Country;
use App\Models\Category;
use App\Models\Rate;
use Laravel\Ui\Presets\React;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movieList = Movie::with('category', 'genre', 'country')->orderBy('id', 'DESC')->get();
        return view('admincp.movie.index', compact('movieList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryList = Category::pluck('title', 'id');
        $countryList = Country::pluck('title', 'id');
        $genreList = Genre::pluck('title', 'id');

        return view('admincp.movie.form', compact('categoryList', 'countryList', 'genreList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate  = $request->validate([
            'title' => ['required', 'string', 'max:255', 'unique:movies'],
            'slug' => ['required', 'string', 'max:255', 'unique:movies'],
        ]);
        $data = $request->all();

        $movie = new Movie();
        $movie->title = $data['title'];
        $movie->description = $data['description'];
        $movie->status = $data['status'];
        $movie->slug = $data['slug'];
        $movie->category_id = $data['category_id'];
        $movie->genre_id = $data['genre_id'];
        $movie->country_id = $data['country_id'];
        $movie->time = $data['time'];
        $movie->age = $data['age'];
        $movie->trailer_link = $data['trailer_link'];

        $movie->image = $data['title'];

        $get_image = $request->file('image');

        $path = 'backend/uploads/movie';

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
        $categoryList = Category::pluck('title', 'id');
        $countryList = Country::pluck('title', 'id');
        $genreList = Genre::pluck('title', 'id');

        $Movie = Movie::find($id);
        return view('admincp.movie.form', compact('categoryList', 'countryList', 'genreList', 'Movie'));
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

        $movie = Movie::find($id);
        $movie->title = $data['title'];
        $movie->description = $data['description'];
        $movie->status = $data['status'];
        $movie->slug = $data['slug'];
        $movie->category_id = $data['category_id'];
        $movie->genre_id = $data['genre_id'];
        $movie->country_id = $data['country_id'];
        $movie->trailer_link = $data['trailer_link'];

        $get_image = $request->file('image');


        if ($get_image) {
            if (!empty($movie->image)) {
                unlink('backend/uploads/movie/' . $movie->image);
            }
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 9999) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('backend/uploads/movie/', $new_image);
            $movie->image = $new_image;
        }

        $movie->save();
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
        $movie = Movie::find($id);
        if (!empty($movie->image)) {
            unlink('backend/uploads/movie/' . $movie->image);
        }
        $movie->delete();
        return back();
    }

    public function insert_rating(Request $request)
    {
        $data = $request->all();
        $rating = new Rate();
        $rating->movie_id = $data['movie_id'];
        $rating->rating = $data['index'];
        $rating->save();
        echo 'done';
    }
}
