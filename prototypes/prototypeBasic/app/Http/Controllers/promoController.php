<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;


class promotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $promotion= Promotion::all();
        return view('index',compact('promotion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $promotion=Promotion::create([
            'name'=>$request->name
        ]);
        return redirect('index');
    }


}