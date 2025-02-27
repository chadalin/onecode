<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
   
    {
       $post = (object)[
            'id' => 123,
            'title' => 'lorem ipsum',
            'content' =>'lore lorem <strong>lorev</strong> lorem',];
        $posts = array_fill(0, 10, $post);
       // dd($posts);*/
        //return view('blog.index');
        return view('blog.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    
    
    {
        
        if (true){
        return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = (object)[
            'id' => 123,
            'title' => 'lorem ipsum',
            'content' =>'lore lorem <strong>lorev</strong> lorem',];
       
        return view('blog.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
