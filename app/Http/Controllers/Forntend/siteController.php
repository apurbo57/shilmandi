<?php

namespace App\Http\Controllers\Forntend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class siteController extends Controller
{
    public function index(){
        return view('frontend.home');
    }

    public function courses(){
        return view('frontend.courses');
    }

    public function rpl(){
        return view('frontend.rpl');
    }

    public function contact(){
        return view('frontend.contact');
    }




    public function single_course(){
        return view('frontend.single-course');
    }

    public function apply_course(){
        return view('frontend.apply');
    }
}
