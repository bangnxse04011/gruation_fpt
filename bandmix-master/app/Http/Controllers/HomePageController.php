<?php

namespace App\Http\Controllers;

use App\Repositories\NewsRepository;
use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
    public function index(NewsRepository $newsRepository) {
        $news = $newsRepository->findWhere([
            'is_show_home'=> 1,
        ]);
        return view('welcome',compact('news'));
    }
}
