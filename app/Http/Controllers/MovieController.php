<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Categorie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listMovies = Movie::all();
        $categories = Categorie::all();
        return view('Dashboard.movies.index',['movies'=>$listMovies,'categories'=>$categories]);
    }
    public function ourMovies(){
        $listMovies = Movie::all();
        return view('template.ourMovies',['movies'=>$listMovies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Categorie::all();
        return view('Dashboard.movies.add',['categories'=>$categories]);
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
        $movie = new Movie();
        $movie->name = $request->input('name');
        $movie->description = $request->input('description');
        $movie->price = $request->input('price');
        //$movie->poster = $request->input('poster');
        $movie->categorie_id = $request->input('cetegory');  

        $image = $request->file('poster');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $movie->poster =$new_name;
        $image->move(public_path('assets/img'), $new_name);
    
        $movie->save();
            return redirect('movies');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        $movie = Movie::find($id);
        $movie->name = $request->input('name');
        $movie->price = $request->input('price');
        $movie->description = $request->input('description');
        $image = $request->file('poster');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $movie->poster =$new_name;
       $image->move(public_path('assets/img'), $new_name);
        $movie->save();
        return redirect('movies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
        $movie = Movie::find($id);
        $movie->delete();
        return redirect('movies');
    }
   
}
