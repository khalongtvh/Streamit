<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LiveSearchController extends Controller
{
    public function index()
    {
        $movie = Movie::all();
        return view('welcome', ['movie' => $movie]);
    }

    function action(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $query = $request->get('query');
            if ($query != '') {
                $data = DB::table('movies')
                    ->where('title', 'like', '%' . $query . '%')
                    ->get();
            }
            $total_row = $data->count();
            if ($total_row > 0) {
                foreach ($data as $row) {
                    $output .= '<tr>
                                    <td>' . $row->title . '</td>
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
