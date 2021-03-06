<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listClient = User::all()->where('role','client');
        return view('Dashboard.clients.index',['clients'=>$listClient]);
    }
}