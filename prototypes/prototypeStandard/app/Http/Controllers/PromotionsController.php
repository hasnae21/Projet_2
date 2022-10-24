<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;


class PromotionsController extends Controller
{

    public function index()
    {
        // afichage des donnees 
        $promos = Promotion::all();
        return view(
            'index',
            compact("promos")
        );
    }

    public function store(Request $request)
    {
        $promo = new Promotion();
        $promo
            ->name = $request
            ->input("name");
        $promo
            ->save();

        return redirect('/');
    }

    public function create()
    {
        // creation des donnees 
        return view('create');
    }

    // modifier
    public function update(Request $request, $id)
    {
        Promotion::where('id', $id)
            ->update([
                'name' => $request->input
            ]);

        return redirect('/');
    }

    public function edit($id)
    {
        $promoid = Promotion::where('id', $id)
            ->get();
        return view(
            'edit',
            compact('promoid')
        );
    }

    // suprimer
    public function destroy($id)
    {
        Promotion::where('id', $id)
            ->delete();

        return redirect('/');
    }
}
