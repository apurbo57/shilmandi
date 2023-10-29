<?php

namespace App\Http\Controllers\Forntend;

use App\Http\Controllers\Controller;
use App\Models\course;
use App\Models\slider;
use Illuminate\Http\Request;
use PDF;

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
        $courses = course::where('course_type',2)->latest()->get();
        return view('frontend.rpl',compact('courses'));
    }

    public function contact(){
        return view('frontend.contact');
    }




    public function single_course(string $id)
    {   
        $course = course::find($id);
        if ($course) {
            return view('frontend.single-course',compact('course'));
        }
        return redirect()->back();
    }

    public function apply_course(string $id)
    {
        $course = course::find($id);
        return view('frontend.apply',compact('course'));
    }

    public function enroll_course(Request $request)
    {
        $pdf = PDF::loadView('frontend.components.apply-form');
        // return $pdf->download('Shilmandi_Training_institiute_center_apply_form ');
        $name = $request->name;
        $id = 1;
        return view('frontend.thank-you',compact('name','id'));
    }

    public function form_download()
    {
        return "test";
    }
}
