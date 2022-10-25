<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;

use DB;


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

    // rechercher 
    function action(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $query = $request->get('query');
            if ($query != '') {
                $data = DB::table('promotions')
                    ->where('name', 'like', '%' . $query . '%')
                    ->orWhere('id', 'like', '%' . $query . '%')
                    ->get();
            } else {
                $data = DB::table('promotions')
                    ->orderBy('id', 'desc')
                    ->get();
            }

            $total_row = $data->count();
            if ($total_row > 0) {
                foreach ($data as $row) {
                    $output .= '
                    <tr>
                    <td>' . $row->name . '</td>
                    <td>' . $row->id . '</td>
                    </tr>
                    ';
                }
            } else {
                $output = '
                <tr>
                    <td align="center" colspan="5">No Data Found</td>
                </tr>
                ';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );
            echo json_encode($data);
        }
    }
}