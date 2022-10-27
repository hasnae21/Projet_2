<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;


class PromotionsController extends Controller
{

    public function index()
    {
        // afichage des donnees 
        $promos = Promotion::select("*")
            ->orderby("id","ASC")
            ->paginate(10);
        return view(
            'index',
            ['promos'=>$promos]
        );
    }
    public function store(Request $request)
    {
        $promo = new Promotion();
        $promo
            ->name = $request
            ->input("new");
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
            ['promoid'=>$promoid]
        );
    }

    // suprimer
    public function destroy($id)
    {
        Promotion::where('id', $id)
            ->delete();

        return redirect('/');
    }

    // Rechercher
    public function ajax_search(Request $request)
    {
        if($request->ajax()){
            $search_promo =$request->search_promo;
            $data=Promotion::where("name","like","%($search_promo)%")
                ->orderby("id","ASC")
                ->paginate(1);

            return view('ajax_search',['data'=>$data]);
        }
    }




}
