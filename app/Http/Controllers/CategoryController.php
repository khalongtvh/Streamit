<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCategory = Category::all();
        return view('admincp.category.index', compact('listCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $listCategory = Category::all();
        return view('admincp.category.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate  = $request->validate( [
            'title' => ['required', 'string', 'max:255', 'unique:categories'],
            'slug' => ['required', 'string', 'max:255', 'unique:categories'],
        ]); 

        $data = $request->all();
        $category = new Category();
        $category->title = $data['title'];
        $category->slug = $data['slug'];
        $category->description = $data['description'];
        $category->status = $data['status'];

        $category->save();

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
        $category = Category::find($id);
        $listCategory = Category::all();
        return view('admincp.category.form', compact('listCategory', 'category'));
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
        $validate  = $request->validate([
            'title' => ['required', 'string', 'max:255', 'unique:categories'],
            'slug' => ['required', 'string', 'max:255', 'unique:categories'],
        ]);
        $data = $request->all();
        $category = Category::find($id);
        $category->title = $data['title'];
        $category->slug = $data['slug'];
        $category->description = $data['description'];
        $category->status = $data['status'];

        $category->save();

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
        Category::find($id)->delete();
        return redirect()->back(); 
    }
}
