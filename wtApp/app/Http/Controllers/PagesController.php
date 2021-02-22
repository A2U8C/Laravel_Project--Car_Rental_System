<?php

namespace App\Http\Controllers;
use App\Post;
use DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title='Welcome to Car Rental System!';
        return view('pages.index',compact('title'));
    }

    public function about(){
        $title='About Us';

        return view('pages.about')->with('title',$title);
    }

    public function services(){
        return view('pages.services');
    }
    public function admin(){
        return view('pages.admin');
    }

    public function adminPage(){
        $posts= Post::orderBy('id','asc')->get();
        return view('pages.adminPage')->with('posts',$posts);
    }

}
