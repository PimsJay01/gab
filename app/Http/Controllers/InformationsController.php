<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

class InformationsController extends Controller
{
    // public function index(Request $request)
	// {
    //     $data = $request->data;
    //
    //     $data['title'] = 'Informations';
    //
    //     $data['items'] = $data['navbarRoutes'][1];
    //
	// 	return view('list', $data);
	// }

    public function aboutus(Request $request)
	{
        // $data = $request->data;

        // $data['aboutus'] = DB::table('aboutus')->get();

		// return view('informations/aboutus', $data);
        return DB::table('aboutus')->get();
	}

    // public function committee(Request $request)
	// {
    //     $data = $request->data;
    //
    //     $data['title'] = 'Comité';
    //
    //     return view('demo', $data);
	// }
    //
    // public function links(Request $request)
	// {
    //     $data = $request->data;
    //
    //     $data['title'] = 'Liens';
    //
    //     $data['link_types'] = self::getLinksGroupByType();
    //
    //     return view('informations/links', $data);
	// }
    //
    // private static function getLinksGroupByType()
    // {
    //     return collect(self::getLinks())
    //         ->map(function($item) {
    //             $item->img = 'link/' . $item->img;
    //             return $item;
    //         })
    //         ->groupBy('type')
    //         ->toArray();
    // }
    //
    // private static function getLinks()
    // {
    //     return DB::table('links')
    //         ->select(
    //             'links.title',
    //             'links.img',
    //             'links.url',
    //             'link_types.title as type'
    //         )
    //         ->join('link_types', 'link_types.id', '=', 'links.link_type_id')
    //         ->orderBy('link_type_id')
    //         ->get();
    // }
    //
    // public function news(Request $request, $news_type = '')
	// {
    //     $data = $request->data;
    //
    //     abort_if($this->isUnknownNewsType($news_type), 404);
    //
    //     $data['news'] = self::getNews($news_type);
    //
    //     return view('informations/news', $data);
	// }
    //
    // private function isUnknownNewsType($news_type)
    // {
    //     return ($news_type != '') && !in_array($news_type, config('constant.news_types'));
    // }
    //
    // private static function getNews($news_type)
    // {
    //     $news = array();
    //     if($news_type != '') {
    //         $news = DB::table('news')
    //             ->where('type', '=', $news_type)
    //             ->orderBy('updated_at')
    //             ->get();
    //     }
    //     else {
    //         $news = DB::table('news')
    //             ->orderBy('updated_at')
    //             ->get();
    //     }
    //
    //     return self::formatCreatedDate($news);
    // }
    //
    // private static function formatCreatedDate($news) {
    //     return collect($news)
    //         ->map(function($item) {
    //             $timestamp = strtotime($item->created_at);
    //             $date = explode(' ', date("D j M Y", $timestamp));
    //             $date[0] = trans('date.' . $date[0]);
    //             $date[2] = trans('date.' . $date[2]);
    //             $item->date = vsprintf('%s %s %s %s', $date);
    //             return $item;
    //         })
    //         ->toArray();
    // }
    //
    // public function playoffs(Request $request)
	// {
    //     $data = $request->data;
    //
    //     $data['title'] = 'Playoffs & Playouts';
    //
    //     return view('demo', $data);
	// }
}
