<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use App\Models\Apprenant;
use Illuminate\Http\Request;

class promotionController extends Controller
{
    public function Afficher(){
        $promotion = Promotion::all();
        return view('promotion.index',compact('promotion'));
    }

    public function Create(){

        return view('promotion.create');

    }

    public function Ajouter(request $request){
            Promotion::create([
            'nom'=>$request->name
        ]);
        return redirect('index');
    }

    public function Edit($id){
        $promotion=Promotion::where('id_promotion',$id)
        ->get();
        $apprenant = Apprenant::where('promot_id',$id)
        ->join('promotion','apprenant.promot_id','promotion.id_promotion')
        ->get();
        return view('promotion.edit', compact('promotion','apprenant'));
    }


    public function Modifier(request $request , $id){
        Promotion::where('id_promotion',$id)
        ->update([
            'nom'=>$request->name
        ]);
        return redirect(url('edit/'.$id));
    }


    public function Supprimer($id){
        Promotion::where('id_promotion',$id)
        ->delete();
        return redirect('index');
    }

    public function search(Request $request){
        if($request->ajax()){
            $input = $request->key;
        $output="";
        $Promotion= Promotion::where('nom','like',$input."%")
        ->get();
        if($Promotion)
        {
            foreach ($Promotion as $value) {
            $urlEdit = (url('edit/'.$value->id_promotion));
            $urlDelete = (url('suprimer/'.$value->id_promotion));
        $output.='<tr>

        <td>'.$value->id_promotion.'</td>
        <td>'.$value->nom.'</td>

        <td>

        <a href='.$urlEdit.' class="edit" ><i class="material-icons"  title="Edit">&#xE254;</i></a>
         <a href='.$urlDelete.' class="delete" ><i class="material-icons"  title="Delete">&#xE872;</i></a>
        <td>
        </tr>';

    }
      return Response($output);
      }
    }
}
}
