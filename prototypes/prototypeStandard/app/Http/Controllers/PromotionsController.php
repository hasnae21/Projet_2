<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\promotion;


class PromotionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // afichage des donnees 

        $table = promotion::all();
        return view("index", compact("table"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ajouter des donnees

        $promotion = new promotion();
        $promotion->name_promotion = $request->input("name");
        $promotion->save();
        if ($promotion->save()) {
            return redirect('index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //   $promotion = promotion::where('id',$id)
        //   ->get();
        //   return view('edit',compact('promotion'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //  $promotion = promotion::where('id',$id)
        //  ->update([
        //     'name_promotion'=>$request->name
        //  ]);
        //  return redirect('index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //  $promotion = promotion::where('id',$id)
        //  ->update([
        //     'name_promotion'=>$request->name
        //  ]);
        //  return redirect('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        //     $promotion = promotion::where('id',$id)
        //     ->delete();
        //     return redirect('index');
    }
}

