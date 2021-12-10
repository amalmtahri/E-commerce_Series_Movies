<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use App\Models\Categorie;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $listSeries = Serie::all();
        $categories = Categorie::all();
        return view('Dashboard.series.index',['series'=>$listSeries,'categories'=>$categories]);
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
        return view('Dashboard.series.add',['categories'=>$categories]);
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
        $serie = new Serie();
        $serie->name = $request->input('name');
        $serie->description = $request->input('description');
        $serie->price = $request->input('price');
        $serie->categorie_id = $request->input('cetegory');  

        $image = $request->file('poster');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $serie->poster =$new_name;
        $image->move(public_path('assets/img'), $new_name);
    
        $serie->save();
            return redirect('series');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function show(Serie $serie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function edit(Serie $serie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        $serie = Serie::find($id);
        $serie->name = $request->input('name');
        $serie->price = $request->input('price');
        $serie->description = $request->input('description');
        $image = $request->file('poster');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $serie->poster =$new_name;
        $image->move(public_path('assets/img'), $new_name);
        $serie->save();
        return redirect('series');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
        $serie = Serie::find($id);
        $serie->delete();
        return redirect('series');
    }
}
