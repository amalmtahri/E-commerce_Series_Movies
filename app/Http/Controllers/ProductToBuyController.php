<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\ProductToBuy;
use App\Models\CardLine;
use Illuminate\Http\Request;

use App\Models\Movie;

class ProductToBuyController extends Controller
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
    public function addMovie(Request $request)
    {
        $product = new ProductToBuy();
        $product->movie_id = $request->input('idMovie');
        $product->save();
        $user=Auth::user();
        $cardLine = new CardLine();
        $cardLine->card_id = $user->card->id;
        $cardLine->productToBuy_id = $product->id;
        $cardLine->save();
        return back(); 
    }

    public function addSeason(Request $request)
    {
        $product = new ProductToBuy();
        $product->season_id = $request->input('idSeason');
        $product->save();
        $user=Auth::user();
        $cardLine = new CardLine();
        $cardLine->card_id = $user->card->id;
        $cardLine->productToBuy_id = $product->id;
        $cardLine->save();
        return back(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductToBuy  $productToBuy
     * @return \Illuminate\Http\Response
     */
    public function show(ProductToBuy $productToBuy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductToBuy  $productToBuy
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductToBuy $productToBuy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductToBuy  $productToBuy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductToBuy $productToBuy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductToBuy  $productToBuy
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductToBuy $productToBuy)
    {
        //
    }
}
