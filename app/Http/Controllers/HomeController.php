<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['images'] = Image::all();
        return view('home', $data);
    }

    public function images()
    {
        $data['images'] = Image::all();

        return view('images', $data);
    }
}
