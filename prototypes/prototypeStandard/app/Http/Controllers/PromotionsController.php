<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Promotion;


class PromotionsController extends Controller
{

    public function index()
    {
        // afichage des donnees 

        $table = Promotion::all();
        return view("index", compact("table"));
    }


    public function create()
    {
        // creation des donnees 

        return view('create');
    }


    public function store(Request $request)
    {
        $promotion = new Promotion();
        $promotion->name = $request->input("name");
        $promotion->save();

        if ($promotion->save()) {
            return redirect('/');
        }
    }


    public function edit($id)
    {
        $promotion = Promotion::where('id', $id)
            ->get();
        return view('edit', compact('promotion'));
    }


    public function update(Request $request, $id)
    {
        $promotion = Promotion::where('id', $id)
            ->update([
                'name' => $request->name
            ]);
        return redirect('/');
    }


    public function destroy($id)
    {
        $promotion = Promotion::where('id', $id)
            ->delete();
        return redirect('/');
    }
    
}
