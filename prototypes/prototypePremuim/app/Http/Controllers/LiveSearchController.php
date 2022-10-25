<?php

// namespace App\Http\Controllers;
 
// use Illuminate\Http\Request;
// use DB;
 
// class LiveSearchController extends Controller
// {
//     function index()
//     {
//         return view('livesearch');
//     }
 
//     function action(Request $request)
//     {
//         if($request->ajax())
//         {
//             $output = '';
//             $query = $request->get('query');
//             if($query != '') {
//                 $data = DB::table('customers')
//                     ->where('CustomerName', 'like', '%'.$query.'%')
//                     ->orWhere('Address', 'like', '%'.$query.'%')
//                     ->orWhere('City', 'like', '%'.$query.'%')
//                     ->orWhere('PostalCode', 'like', '%'.$query.'%')
//                     ->orWhere('Country', 'like', '%'.$query.'%')
//                     ->orderBy('id', 'desc')
//                     ->get();
                    
//             } else {
//                 $data = DB::table('customers')
//                     ->orderBy('id', 'desc')
//                     ->get();
//             }
             
//             $total_row = $data->count();
//             if($total_row > 0){
//                 foreach($data as $row)
//                 {
//                     $output .= '
//                     <tr>
//                     <td>'.$row->CustomerName.'</td>
//                     <td>'.$row->Address.'</td>
//                     <td>'.$row->City.'</td>
//                     <td>'.$row->PostalCode.'</td>
//                     <td>'.$row->Country.'</td>
//                     </tr>
//                     ';
//                 }
//             } else {
//                 $output = '
//                 <tr>
//                     <td align="center" colspan="5">No Data Found</td>
//                 </tr>
//                 ';
//             }
//             $data = array(
//                 'table_data'  => $output,
//                 'total_data'  => $total_row
//             );
//             echo json_encode($data);
//         }
//     }
// }