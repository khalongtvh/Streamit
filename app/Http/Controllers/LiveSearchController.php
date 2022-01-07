<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LiveSearchController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('welcome', ['user' => $user]);
    }

    function action(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $query = $request->get('query');
            if ($query != '') {
                $data = DB::table('users')
                    ->where('name', 'like', '%' . $query . '%')
                    ->get();
            } else {
                $data = DB::table('users')
                    ->orderBy('id', 'desc')
                    ->get();
            }
            $total_row = $data->count();
            if ($total_row > 0) {
                foreach ($data as $row) {
                    $output .= '<tr>
                                    <td>' . $row->name . '</td>
                                </tr>';
                }
            } else {
                $output =   '<tr>
                                <td align="center" colspan="5">No Data Found</td>
                            </tr>';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );

            echo json_encode($data);
        }
    }
}
