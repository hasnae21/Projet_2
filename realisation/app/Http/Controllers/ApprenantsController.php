<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Promotion;
use App\Models\Apprenant;

class ApprenantsController extends Controller
{

    //ajouter apprenant
    public function create($id)
    {
        return view('apprenant.create', compact('id'));
    }




    //ajouter Promotion
    public function store(request $request)
    {
        Apprenant::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'promo_id' => $request->promo_id,
        ]);

        return  redirect(url('edit_forms/' . $request->promo_id));  ///edit_form promo
    }




    // modifier Apprenant
    public function edit($id)
    {
        $apprenant = Apprenant::where('id', $id)
            ->get();

        return view('apprenant.edit', compact('apprenant'));
    }


    public function update(Request $request, $id)
    {
        Apprenant::where('id', $id)
            ->update([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'email' => $request->email,
                'promo_id' => $request->promo_id,
            ]);

        return redirect(url('edit_forms/' . $request->promo_id));  ///edit_form apprenants
    }




    //supprmer Apprenant
    public function destroy($id)
    {
        Apprenant::where('id', $id)
            ->delete();

        return back();
    }




    // Rechercher Apprenant
    public function search(Request $request)
    {
        if ($request->ajax()) {

            $input = $request->key;
            $id = $request->id;
            $output = "";

            $apprenant = Apprenant::where([

                ["promo_id", '=', $id],
                ['id', '=', $input],
            ])

                ->orWhere([
                    ["promo_id", '=', $id],
                    ['nom', 'like', $input . "%"]
                ])

                ->orWhere([
                    ["promo_id", '=', $id],
                    ['prenom', 'like', $input . "%"]
                ])

                ->orWhere([
                    ["promo_id", '=', $id],
                    ['email', 'like', $input . "%"]
                ])

                ->join('promotions', 'apprenants.promo_id', 'promotions.id')
                ->get();


            if ($apprenant) {
                foreach ($apprenant as $value) {

                    $output .= '
                    <tr>
                            <td>' . $value->id . '</td>
                            <td>' . $value->nom . '</td>
                            <td>' . $value->prenom . '</td>
                            <td>' . $value->email . '</td>
                            <td>
                                    <a href="edit_form/' . $value->id . '">Modifier</a>

                                    <a href="delete/' . $value->id . '" >Supprimer</a>
                            <td>

                    </tr>';
                }

                return Response($output);
            }
        }
    }




}
