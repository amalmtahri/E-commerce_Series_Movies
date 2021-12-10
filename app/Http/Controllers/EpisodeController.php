<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Season;
use App\Models\Serie;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $listSerie = Serie::all();
        $listEpisodes = Episode::all();
        return view('Dashboard.episodes.index',['episodes'=>$listEpisodes,'series'=>$listSerie]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $listSerie = Serie::all();
        return view('Dashboard.episodes.add',['series'=>$listSerie]);
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
        $episode = new Episode();
        $episode->season_id = $request->input('season_id');
        $episode->numbreEpisode = $request->input('number_episode');
        $episode->timeEpisode = $request->input('time_episode');
        $episode->save();
            return redirect('episodes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Episode  $episode
     * @return \Illuminate\Http\Response
     */
    public function show(Episode $episode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Episode  $episode
     * @return \Illuminate\Http\Response
     */
    public function edit(Episode $episode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Episode  $episode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        //
        $episode = Episode::find($id);
        $episode->numbreEpisode = $request->input('number_episode');
        $episode->timeEpisode = $request->input('time_episode');
        $episode->save();
            return redirect('episodes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Episode  $episode
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
        $episode = Episode::find($id);
        $episode->delete();
        return redirect('episodes');
    }
}
