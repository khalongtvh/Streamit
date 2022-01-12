<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\Country;
use App\Models\Episode;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Rate;
class IndexController extends Controller
{
    public function home()
    {
        $categoryList = Category::orderBy('id', 'DESC')->where('status', 1)->get();
        $genreList = Genre::orderBy('id', 'DESC')->where('status', 1)->get();
        $countryList = Country::orderBy('title', 'DESC')->where('status', 1)->get();
        $bannerList = Banner::orderBy('id', 'DESC')->where('status', 1)->get();
        $category_home = Category::with('movie')->orderBy('id', 'DESC')->where('status', 1)->get();
        return view('pages.home', compact('categoryList', 'genreList', 'countryList', 'bannerList', 'category_home'));
    }

    public function category($slug)
    {
        $categoryList = Category::orderBy('id', 'DESC')->where('status', 1)->get();
        $genreList = Genre::orderBy('id', 'DESC')->where('status', 1)->get();
        $countryList = Country::orderBy('title', 'DESC')->where('status', 1)->get();
        $category_slug = Category::where('slug', $slug)->first();
        $movie = Movie::where('category_id', $category_slug->id)->paginate(14);
        return view('pages.category', compact('categoryList', 'genreList', 'countryList', 'category_slug', 'movie'));
    }

    public function genre($slug)
    {
        $categoryList = Category::orderBy('id', 'DESC')->where('status', 1)->get();
        $genreList = Genre::orderBy('id', 'DESC')->where('status', 1)->get();
        $countryList = Country::orderBy('title', 'DESC')->where('status', 1)->get();

        $genre_slug = Genre::where('slug', $slug)->first();

        $movie = Movie::where('genre_id', $genre_slug->id)->paginate(14);

        return view('pages.genre', compact('categoryList', 'genreList', 'countryList', 'genre_slug', 'movie'));
    }

    public function country($slug)
    {
        $categoryList = Category::orderBy('id', 'DESC')->where('status', 1)->get();
        $genreList = Genre::orderBy('id', 'DESC')->where('status', 1)->get();
        $countryList = Country::orderBy('title', 'DESC')->where('status', 1)->get();

        $country_slug = Country::where('slug', $slug)->first();
        $movie = Movie::where('country_id', $country_slug->id)->paginate(14);

        return view('pages.country', compact('categoryList', 'genreList', 'countryList', 'country_slug', 'movie'));
    }

    public function movie($slug)
    {
        $categoryList = Category::orderBy('id', 'DESC')->where('status', 1)->get();
        $genreList = Genre::orderBy('id', 'DESC')->where('status', 1)->get();
        $countryList = Country::orderBy('title', 'DESC')->where('status', 1)->get();

        $movie = Movie::with('genre', 'category', 'country')->where('slug', $slug)->where('status', 1)->first();
        $movie_recommented = Movie::with('genre', 'category', 'country')->where('category_id', $movie->category->id)->orderBy(DB::raw('RAND()'))->whereNotIn('slug', [$slug])->get();
        
        $episode = Episode::with('movie')->orderBy('id', 'ASC')->where('movie_id', $movie->id)->get();

        $episode_first = Episode::with('movie')->orderBy('id', 'ASC')->where('movie_id', $movie->id)->first();

        $rating = Rate::where('movie_id', $movie->id)->avg('rating');
        // $rating = round($rating);
        return view('pages.movie', compact('categoryList', 'genreList', 'countryList', 'movie', 'movie_recommented', 'episode', 'episode_first', 'rating'));
    }

    public function episode($slug)
    {
        $categoryList = Category::orderBy('id', 'DESC')->where('status', 1)->get();
        $genreList = Genre::orderBy('id', 'DESC')->where('status', 1)->get();
        $countryList = Country::orderBy('title', 'DESC')->where('status', 1)->get();

        $movie = Episode::where('slug_episode', $slug)->first();
        
        $episode = Episode::with(('movie'))->where('slug_episode', $slug)->where('movie_id', $movie->movie_id)->first();
        
        $all_episode = Episode::with('movie')->orderBy('id', 'ASC')->where('movie_id', $movie->movie_id)->get();

        $rating = Rate::where('movie_id', $episode->movie->id)->avg('rating');

        $rating = round($rating);
        $movie_recommented = Movie::with('genre', 'category', 'country')->where('category_id', $episode->movie->category->id)->orderBy(DB::raw('RAND()'))->whereNotIn('slug', [$episode->movie->slug])->get();
        
        return view('pages.episode', compact('categoryList', 'genreList', 'countryList', 'episode', 'all_episode', 'movie_recommented', 'rating'));    
    }

    
    public function watch()
    {
        $categoryList = Category::orderBy('id', 'DESC')->where('status', 1)->get();
        $genreList = Genre::orderBy('id', 'DESC')->where('status', 1)->get();
        $countryList = Country::orderBy('title', 'DESC')->where('status', 1)->get();
        // return view('pages.episode', compact('categoryList', 'genreList', 'countryList'));
        return view('pages.manager_profile', compact('categoryList', 'genreList', 'countryList'));
    }


    public function profile()
    {
        $categoryList = Category::orderBy('id', 'DESC')->where('status', 1)->get();
        $genreList = Genre::orderBy('id', 'DESC')->where('status', 1)->get();
        $countryList = Country::orderBy('title', 'DESC')->where('status', 1)->get();
        return view('pages.manager_profile', compact('categoryList', 'genreList', 'countryList'));
    }

    function action(Request $request)
    {
        $host = request()->getHttpHost();
        // $host1 = $request->getHttpHost();
        if ($request->ajax()) {
            $output = '';
            $result = '';
            $url_image = "http://".$host."/backend/uploads/movie";
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
                    $result .= '<a href="http://'.$host.'/phim/'.$row->slug.'" class="iq-sub-card">' .
                                '<div class="media align-items-center">' .
                                '<img src="' . $url_image . '/' . $row->image . '" class="img-fluid mr-3" alt="streamit" style="width : 40%"/>' .
                                '<div class="media-body">' .
                                '<h6 class="mb-0 ">' . $row->title . '</h6>' .
                                '</div>' .
                                '</div>' .
                                '</a>';
                }
            } else {
                $output =   '<tr>
                                <td align="center" colspan="5">No Data Found</td>
                            </tr>';
            }
            $data = array(
                'table_data'  => $output,
                'result_data'  => $result,
                'total_data'  => $total_row
            );
            echo json_encode($data);
        }
    }

    public function login(){
        return view('login_user.login_user');
    }

    public function sign_up(){
        return view('login_user.sign_up');
    }
}
