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
            ['data' => $data]
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

        return redirect('/')->with(['success' => 'Promotion ajouter']);
    }

    // modifier Promotion
    public function edit($id)
    {
        $promo_id = Promotion::where('id', $id)
            ->get();

        return view(
            'edit',
            ['promo_id' => $promo_id]
        );
    }
    public function update(Request $request, $id)
    {
        Promotion::where('id', $id)
            ->update([
                'name' => $request->updt
            ]);

        return redirect('/')->with(['success' => 'Promotion modifier']);
    }

    // suprimer Promotion
    public function destroy($id)
    {
        Promotion::where('id', $id)
            ->delete();

        return redirect('/')->with(['success' => 'Promotion suprimer']);
    }

    // Rechercher Promotion
    public function search(Request $request)
    {
        if ($request->ajax()) {

            $input = $request->key;
            $output = "";
            $Promotion = Promotion::where('name', 'like', '%' . $input . "%")
                ->get();

            if ($Promotion) {
                foreach ($Promotion as $value) {

                    $output .= '
                    <tr>
                        <td>' . $value->id . '</td>
                        <td>' . $value->name. '</td>
                        <td>
                        <a href="edit_form/'.$value->id.'">Modifier</a>

                        <a href="delete/'.$value->id.'">Supprimer</a>
                        <td>
                    </tr>';
                }

                return Response($output);
            }
        }
    }



}
