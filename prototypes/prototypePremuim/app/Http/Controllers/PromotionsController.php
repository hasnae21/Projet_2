<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;
use App\Http\Requests\CreatePrmotionRequest;


class PromotionsController extends Controller
{

    public function index()
    {
        $data = Promotion::select("*")
            ->paginate(10);

        return view(
            'index',
            ['data'=>$data]
        );
    }

    public function create()
    {
        return view('create');
    }

    public function store(CreatePrmotionRequest $request)
    {
        $promo = new Promotion();
        $promo
            ->name = $request
            ->input("new");
        $promo
            ->save();

        return redirect('/')->with(['success'=>'La promotion est bien ajouter']);
    }

    // modifier Promotion
    public function edit($id)
    {
        $promo_id = Promotion::where('id', $id)
            ->get();

        return view(
            'edit',
            ['promo_id'=>$promo_id]
        );
    }
    public function update(Request $request, $id)
    {
        Promotion::where('id', $id)
            ->update([
                'name' => $request->updt
            ]);

        return redirect('/')->with(['success'=>'updated successfully']);
    }

    // suprimer Promotion
    public function destroy($id)
    {
        Promotion::where('id', $id)
            ->delete();

        return redirect('/')->with(['succes'=>'deleted successfully']);
    }

    // Rechercher Promotion
    public function ajax_search(Request $request)
    {
        if($request->ajax()){
            $search_promo =$request->search_promo;

            $data = Promotion::where("name","like","%($search_promo)%")
                ->paginate(1);

            return view(
                'ajax_search',
                ['data'=>$data]
            );
        }
    }



}
