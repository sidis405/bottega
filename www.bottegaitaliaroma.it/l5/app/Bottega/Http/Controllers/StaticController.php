<?php

namespace Bottega\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

class StaticController extends Controller
{

    public function catch_all($param)
    {
        if(view()->exists('static.' . $param)){
            \Session::put('path', $param);
            $title = prepTitle($param, 'Bottega Italia');
            return view('static.' . $param, compact('title'));
        }
        // return $param;
        abort(404);
    }

    public function index()
    {
        return view('static.index');
    }

}
