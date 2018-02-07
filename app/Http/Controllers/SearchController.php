<?php

namespace Allutomotive\Http\Controllers;

use Allutomotive\Post;
use Allutomotive\Search;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Post $post)
    {

        $keywords = $_GET['keywords'];


        $items = \Allutomotive\Post::where([
            ['keywords', 'LIKE', '%' . $keywords . '%'],

        ])->get();

        return view('categories.searchresult', compact('items'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \Allutomotive\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function show(Search $search)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Allutomotive\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function edit(Search $search)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Allutomotive\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Search $search)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Allutomotive\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function destroy(Search $search)
    {
        //
    }
}
