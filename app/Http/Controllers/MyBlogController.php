<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyBlog;


class MyBlogController extends Controller
{
    public function index()
    {
         $my_blogs = MyBlog::orderBy('achieve_date','DESC')->get();
         return view('achievements',compact('my_blogs'));                                               
    }


    public function index1()
    {
         return view('home');                                               
    }

    public function index2()
    {
         return view('introduction');                                               
    }

}