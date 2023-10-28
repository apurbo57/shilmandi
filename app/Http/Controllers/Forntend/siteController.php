<?php

namespace App\Http\Controllers\Forntend;

use App\Http\Controllers\Controller;
use App\Models\course;
use App\Models\slider;
use Illuminate\Http\Request;

class siteController extends Controller
{
    public function index(){
        $sliders = slider::all();
        $courses = course::latest()->get();
        return view('frontend.home',compact('sliders','courses'));
    }

    public function courses(){
        $courses = course::latest()->get();
        return view('frontend.courses',compact('courses'));
    }

    public function rpl(){
        return view('frontend.rpl');
    }

    public function contact(){
        return view('frontend.contact');
    }




    public function single_course()
    {
        return view('frontend.single');
    }

    public function apply_course(){
        return view('frontend.apply');
    }
}
