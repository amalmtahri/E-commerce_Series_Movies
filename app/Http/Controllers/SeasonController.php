<?php

namespace App\Http\Controllers;

use App\Models\Season;
use App\Models\Serie;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $series = Serie::all();
        $listSeasons = Season::all();
        return view('Dashboard.seasons.index',['seasons'=>$listSeasons,'series'=>$series]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $series = Serie::all();
        return view('Dashboard.seasons.add',['series'=>$series]);
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
        $season = new Season();
        $season->serie_id = $request->input('serie_name');
        $season->numbreSeason = $request->input('number_season');
        $season->save();
            return redirect('seasons');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Season  $season
     * @return \Illuminate\Http\Response
     */
    public function show(Season $season)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Season  $season
     * @return \Illuminate\Http\Response
     */
    public function edit(Season $season)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Season  $season
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        //
        $season = Season::find($id);
        $season->numbreSeason = $request->input('number_season');
        $season->save();
            return redirect('seasons');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Season  $season
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
        $serie = Season::find($id);
        $serie->delete();
        return redirect('seasons');
    }
}
