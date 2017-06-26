<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      //  $homepage = file_get_contents('http://www.baltic-course.com/eng/help/rss/');
       // $homepage = simplexml_load_string($homepage);

        $homepage = file_get_contents('http://rusplt.ru/index/new.rss');
        $homepage = simplexml_load_string($homepage);
        return view('index.index', compact('homepage'));
    }
}
