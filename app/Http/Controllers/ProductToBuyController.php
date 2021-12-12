<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\ProductToBuy;
use App\Models\CardLine;
use App\Models\Card;
use Illuminate\Http\Request;

use App\Models\Movie;

class ProductToBuyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
    public function createCard(){
        $user=Auth::user();
        $cards=Card::all()->where('user_id',$user->id);
        //die($cards);
        if($cards->isEmpty()){
            $card=new Card();
            $card->user_id=$user->id;
            $card->save();
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addMovie(Request $request)
    {
        $this->createCard();
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
        $this->createCard();
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
