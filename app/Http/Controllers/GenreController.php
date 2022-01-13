<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listGenre = Genre::all();
        return view('admincp.Genre.index', compact('listGenre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admincp.Genre.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validate  = $request->validate( [
            'title' => ['required', 'string', 'max:255', 'unique:genre'],
            'slug' => ['required', 'string', 'max:255', 'unique:genre'],
        ]); 

        $data = $request->all();
        $Genre = new Genre();
        $Genre->title = $data['title'];
        $Genre->slug = $data['slug'];
        $Genre->description = $data['description'];
        $Genre->status = $data['status'];

        $Genre->save();

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
        $Genre = Genre::find($id);
        $listGenre = Genre::all();
        return view('admincp.Genre.form', compact('listGenre', 'Genre'));
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
        $Genre = Genre::find($id);
        $Genre->title = $data['title'];
        $Genre->slug = $data['slug'];
        $Genre->description = $data['description'];
        $Genre->status = $data['status'];

        $Genre->save();

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
        Genre::find($id)->delete();
        return redirect()->back();
    }
}
