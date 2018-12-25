<?php

namespace App\Http\Controllers;

use App\Entities\News;
use App\Repositories\BandRepository;
use App\Repositories\EventRepository;
use App\Repositories\EventRepositoryEloquent;
use App\Repositories\NewsRepository;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function uploadFile($file)
    {
        $clientFileName = $file->getClientOriginalName();

        $info = pathinfo($clientFileName);
        $ext = $info['extension'];
        $path = "uploads/avatar";
        $fileName = str_random(10).time().'.'.$ext;
        $file->move(public_path($path),$fileName);

        return $path.'/'.$fileName;
    }

    public function ajaxSearch(Request $request, EventRepository $event, NewsRepository $news, BandRepository $band){
        $key = $request->keyword;
        $events = $event->query(['keyword' => $key])->get();
        $filteredNews = $news->query(['keyword' => $key])->limit(3)->get();
        $bands = $band->query(['keyword' => $key])->limit(3)->get();

        return response()->json([
            'events' => $events,
            'news' => $filteredNews,
            'bands' => $bands,
        ]);
    }
}
