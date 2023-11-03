<?php

namespace App\Http\Controllers\Forntend;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\course;
use App\Models\gallery;
use App\Models\notice;
use App\Models\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class siteController extends Controller
{
    public function index(){
        $sliders = slider::all();
        $courses = course::latest()->get();
        return view('frontend.home',compact('sliders','courses'));
    }

    public function gallery(){
        $galleries = gallery::latest()->paginate(15);
        return view('frontend.gallery',compact('galleries'));
    }

    public function notice(){
        $data = notice::paginate(15);
        return view('frontend.notice',compact('data'));
    }

    public function single_notice(string $id)
    {   $notices = notice::latest()->take(5)->get();
        $notice = notice::find($id);
        if ($notice) {
            return view('frontend.single-notice',compact('notice','notices'));
        }
        return redirect()->back();
    }

    public function download(){
        return view('frontend.download');
    }

    public function about_us(){
        return view('frontend.about-us');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function contact_form(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        $data = new ContactUs();
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->message = $request->message;
        $data->save();

        session::flash('success', 'Slider Add Successfully !');

        return back();
    }

    // public function change(Request $request)
    // {
    //     App::setLocale($request->lang);
    //     session()->put('locale', $request->lang);
  
    //     return redirect()->back();
    // }
    

    

    
}
