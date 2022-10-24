<?php
//laravelproject\app\Http\Controllers\LiveSearchController.php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use DB;
 
class LiveSearchController extends Controller
{
    function index()
    {
        return view('livesearch');
    }
 
    function action(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
            if($query != '') {
                $data = DB::table('promotions')
                    ->where('name', 'like', '%'.$query.'%')
                    ->orWhere('id', 'like', '%'.$query.'%')
                    ->get();
                    
            } else {
                $data = DB::table('promotions')
                    ->orderBy('id', 'desc')
                    ->get();
            }
             
            $total_row = $data->count();
            if($total_row > 0){
                foreach($data as $row)
                {
                    $output .= '
                    <tr>
                    <td>'.$row->name.'</td>
                    <td>'.$row->id.'</td>
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