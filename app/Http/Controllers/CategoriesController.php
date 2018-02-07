<?php

namespace Allutomotive\Http\Controllers;

use Allutomotive\Category;
use Allutomotive\Post;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * CategoriesController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->except('show','index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){



        return view('categories.index', compact('category'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'slug' => 'required'
        ]);
        $input['name']= $request->name;
        $input['slug']= $request->slug;
        $input['importance']=$request->importance;

        Category::create($input);

        return redirect('/home')
            ->with('success','Successfully created a new Category');

    }

    /**
     * Display the specified resource.
     *
     * @param  \Allutomotive\Category  $cathegory
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {

        $posts = $category->posts()->latest()->get();

        if($category->id === 1){

            return view('categories.news',compact('posts'));
        }

        if($category->id === 2){

            return view('categories.reviews',compact('posts'));
        }

        if($category->id === 3){

            return view('categories.videos',compact('posts'));
        }

        if($category->id === 4){

            return view('categories.features',compact('posts'));
        }

        if($category->id === 5){

            return view('categories.guides',compact('posts'));
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Allutomotive\Category  $cathegory
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Allutomotive\Category  $cathegory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $cathegory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Allutomotive\Category  $cathegory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();

        return back()
            ->with('success','Category deleted');
    }
}
