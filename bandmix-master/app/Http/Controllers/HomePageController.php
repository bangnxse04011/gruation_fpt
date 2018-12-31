<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Repositories\NewsRepository;
use App\Http\Controllers\Controller;
use App\Entities\News;
use App\Entities\Band;
use App\Entities\Event;

class HomePageController extends Controller
{
/**
 * @var NewsRepository
 */
protected $newsRepository;

/**
 * EventsController constructor.
 * @param NewsRepository $repository
 */

public function __construct(NewsRepository $newsRepository)
{
    $this->newsRepository = $newsRepository;
}

    public function index() {
        // $news = $this->newsRepository->findWhere([
        //     'is_show_home'=> 1,
        // ]);

        $news = News::orderBy('created_at', 'desc')->paginate('4');

        $bands = Band::orderBy('created_at', 'desc')->paginate('4');

        $events = Event::query()->where('status','=','1')->orderBy('date', 'desc')->paginate('4');

        $data['news'] = $news;
        $data['bands'] = $bands;
        $data['events'] = $events;

        return view('welcome', $data);
    }

    public function search(Request $request) {
        $news = News::where('title', 'like', '%' . $request->searchValue . '%')->paginate('4');

        $bands = Band::where('name', 'like', '%' . $request->searchValue . '%')->paginate('4');

        $events = Event::where('name', 'like', '%' . $request->searchValue . '%')->paginate('4');

        $data['news'] = $news;
        $data['bands'] = $bands;
        $data['events'] = $events;

        return view('welcome', $data);
    }
}
