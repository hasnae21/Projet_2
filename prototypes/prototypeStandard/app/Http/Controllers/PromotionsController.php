<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;


class PromotionsController extends Controller
{

    public function index()
    {
        // afichage des donnees 
        $promo = Promotion::all();
        return view(
            'index',
            compact("promo")
        );
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
    public function create()
    {
        // creation des donnees 
        return view('create');
    }

    // modifier
    public function edit($id)
    {
        $promo = Promotion::where('id', $id)
            ->get();
        return view(
            'edit',
            compact('promo')
        );
    }
    public function update(Request $request, $id)
    {
        Promotion::where('id', $id)
            ->update(['name' => $request->name]);
        return redirect('/');
    }

    // suprimer
    public function destroy($id)
    {
        Promotion::where('id', $id)
            ->delete();
        return redirect('/');
    }
}
