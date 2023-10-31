<?php

namespace App\Http\Controllers\Forntend;

use App\Http\Controllers\Controller;
use App\Models\course;
use App\Models\gallery;
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

    public function gallery(){
        $galleries = gallery::latest()->get();
        return view('frontend.gallery',compact('galleries'));
    }

    public function contact(){
        return view('frontend.contact');
    }



    // Course section
    // Course section

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
        $name = $request->nameE;
        $request->validate([
            'course_name' => 'required',
            'nameE' => 'required',
            'nameB' => 'required',
            'fatherNameE' => 'required',
            'fatherNameB' => 'required',
            'motherNameE' => 'required',
            'motherNameB' => 'required',
            'phone' => 'required',
            'Gphone' => 'required',
            'email' => 'required',
            'shift' => 'required',
            'religion' => 'required',
            'gender' => 'required',
            'birthday' => 'required',
            'national_id' => 'required',
            'employment_status' => 'required',
            'present_address' => 'required',
            'present_city' => 'required',
            'present_postal_code' => 'required',
            'present_division' => 'required',
            'present_per_district' => 'required',
            'present_sub_district' => 'required',
            'lavel_of_education' => 'required',
            'institute_name' => 'required',
            'subject' => 'required',
            'passing_year' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        // single image uplode

        // $image = $request->file('image');
        // $fileEx = $image->getClientOriginalExtension();
        // $fileName = date('Ydmhis.').$fileEx;
        // $request->course_image->move(public_path('uploads/course'), $fileName);
        
        // try {

        //     $course = new course();
        //     $course->course_name = $request->course_name;
        //     $course->course_description = $request->course_description;
        //     $course->course_price = $request->course_price;
        //     $course->reg_date = $request->reg_date;
        //     $course->ass_date = $request->ass_date;
        //     $course->batch_no = $request->batch_no;
        //     $course->classes = $request->classes;
        //     $course->course_type = $request->course_type;
        //     $course->image = $fileName;

        //     $course->save();
        //     session::flash('success', 'Course Add Successfully !');
        //   } catch (\Exception $e) {
          
        //       return $e->getMessage();
        //   }
        return view('frontend.thank-you',compact('name'));
    }

    public function form_download($key)
    {
        $pdf = PDF::loadView('frontend.components.apply-form');
        return $pdf->download('Shilmandi_Training_institiute_center_apply_form ');
        // return $pdf->stream();
    }
}
