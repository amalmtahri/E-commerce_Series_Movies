<?php

namespace App\Http\Controllers;

use App\Models\CardLine;
use Illuminate\Http\Request;

class CardLineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cardLines = CardLine::all();
        return view('template.panier',['cardLines'=>$cardLines]);
    }


    public function clientCardLine($id)
    {
        
        $cardLines = CardLine::all();
        return view('template.panier',['cardLines'=>$cardLines]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CardLine  $cardLine
     * @return \Illuminate\Http\Response
     */
    public function show(CardLine $cardLine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CardLine  $cardLine
     * @return \Illuminate\Http\Response
     */
    public function edit(CardLine $cardLine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CardLine  $cardLine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CardLine $cardLine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CardLine  $cardLine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
        $cardLine = CardLine::find($id);
        $cardLine->delete();
        return back();
    }
}
