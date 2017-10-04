<?php

namespace Bottega\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Bottega\Repositories\NewsRepo;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(NewsRepo $news_repo)
    {
        $pinned = $news_repo->getPinnedNewsFront();
        $news = $news_repo->getNotPinnedFront();

        return view('index', compact('pinned', 'news'));

    }

    public function article($slug, NewsRepo $news_repo)
    {
        $item = $news_repo->getFromSlug($slug);

        if( ! $item) redirect()->to('/');

        return view('article', compact('item'));


    }

    public function pull()
    {
        $out = '';
        $result = array();
        $result = shell_exec("/usr/bin/git -c /home/www/sidrit.com/bottega pull 2>&1");
        return $result;
    }


}
