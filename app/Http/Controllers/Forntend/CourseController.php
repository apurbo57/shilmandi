<?php

namespace App\Http\Controllers\Forntend;

use App\Http\Controllers\Controller;
use App\Models\course;
use App\Models\RegularStudent;
use App\Models\RplStudent;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\teacher;
use Illuminate\Support\Facades\View;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = course::latest()->get();
        return view('frontend.courses',compact('courses'));
    }
    /**
     * Display a listing of the RPL resource.
     */
    public function rpl(){
        $courses = course::where('course_type',2)->latest()->get();
        return view('frontend.rpl',compact('courses'));
    }
    /**
     * Display Single course Details.
     */
    public function show(string $id)
    {
        $course = course::with('teacher')->find($id);
        if ($course) {
            return view('frontend.single-course',compact('course'));
        }
        return redirect()->back();
    }
    /**
     * course Apply Form.
     */
   public function apply_course(string $id)
    {
        $course = course::find($id);
        if ($course) {
            if ($course->course_type == 1) {
                return view('frontend.regular_apply_form',compact('course'));
            } else {
                return view('frontend.rpl_apply_form',compact('course'));
            }
        }
        return redirect()->back();
    }
    /**
     * Store Enroll course Details.
     */
    public function enroll_course(Request $request)
    {

        $request->validate([
            'course_id' => 'required',
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
//            'present_city' => 'required',
            'present_postal_code' => 'required',
            'present_division' => 'required',
            'present_per_district' => 'required',
            'present_sub_district' => 'required',
            'level_of_education' => 'required',
            'institute_name' => 'required',
            'subject' => 'required',
            'passing_year' => 'required',
             'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $input = $request->except('_token');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileEx = $image->getClientOriginalExtension();
            $fileName = date('Ydmhis.').$fileEx;
            $request->image->move(public_path('uploads/regular'), $fileName);
            $input['image'] = $fileName;
        }

        $regularStudent = RegularStudent::create($input);

        return redirect()->route('enroll.success',$regularStudent->id);

    }
    public function enroll_course_rpl(Request $request)
    {

        $request->validate([
            'nameE' => 'required',
            'nameB' => 'required',
            'fatherNameE' => 'required',
            'fatherNameB' => 'required',
            'motherNameE' => 'required',
            'motherNameB' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'Gphone' => 'required',
            'Gname' => 'required',
            'religion' => 'required',
            'gender' => 'required',
            'birthday' => 'required',
            'national_id' => 'required',
            'present_address' => 'required',
            'present_postal_code' => 'required',
            'present_post_office' => 'required',
            'present_division' => 'required',
            'present_per_district' => 'required',
            'present_sub_district' => 'required',
            'permanent_address' => 'required',
            'permanent_postal_code' => 'required',
            'permanent_post_office' => 'required',
            'permanent_division' => 'required',
            'permanent_per_district' => 'required',
            'permanent_sub_district' => 'required',
            'level_of_education' => 'required',
            'institute_name' => 'required',
            'passing_year' => 'required',
            'cgpa' => 'required',
            'occupation' => 'required',
            'experience_year' => 'required',
            'image' => 'required|image',
            'signature' => 'required',
            'nid_image' => 'required',
            'work_certificate' => 'required',
            'writen_description' => 'required',
            'is_disability' => 'required',
        ]);

        $input = $request->except('_token');
        $input['is_disability'] = $request->is_disability == 'yes' ? true : false;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileEx = $image->getClientOriginalExtension();
            $fileName = 'image-'.date('Ydmhis.').$fileEx;
            $request->image->move(public_path('uploads/rpl'), $fileName);
            $input['image'] = $fileName;
        }

        if ($request->hasFile('signature')) {
            $image = $request->file('signature');
            $fileEx = $image->getClientOriginalExtension();
            $fileName = 'signature-'.date('Ydmhis.').$fileEx;
            $request->signature->move(public_path('uploads/rpl'), $fileName);
            $input['signature'] = $fileName;
        }

        if ($request->hasFile('nid_image')) {
            $image = $request->file('nid_image');
            $fileEx = $image->getClientOriginalExtension();
            $fileName = 'nid_image-'.date('Ydmhis.').$fileEx;
            $request->nid_image->move(public_path('uploads/rpl'), $fileName);
            $input['nid_image'] = $fileName;
        }
        if ($request->hasFile('work_certificate')) {
            $image = $request->file('work_certificate');
            $fileEx = $image->getClientOriginalExtension();
            $fileName = 'work_certificate-'.date('Ydmhis.').$fileEx;
            $request->work_certificate->move(public_path('uploads/rpl'), $fileName);
            $input['work_certificate'] = $fileName;
        }
        if ($request->hasFile('writen_description')) {
            $image = $request->file('writen_description');
            $fileEx = $image->getClientOriginalExtension();
            $fileName = 'writen_description-'.date('Ydmhis.').$fileEx;
            $request->writen_description->move(public_path('uploads/rpl'), $fileName);
            $input['writen_description'] = $fileName;
        }

        $regularStudent = RplStudent::create($input);

        return redirect()->route('enroll.success.rpl',$regularStudent->id);

    }

    public  function  success($applicantId){
        $regularStudent =  RegularStudent::find($applicantId);
        return view('frontend.thank-you',compact('regularStudent'));
    }
    public  function  rplSuccess($applicantId){
        $rplStudent =  RplStudent::find($applicantId);
        return view('frontend.rpl_thank-you',compact('rplStudent'));
    }

    /**
     * Apply Form Download.
     */
    public function regularFormDownload($id)
    {
        $regularStudent = RegularStudent::find($id);
        $pdf = PDF::loadView('frontend.components.apply-form',compact('regularStudent'))
            ->setPaper( 'a4', 'portrait' )
            ->setOption( ['dpi' => 350, 'defaultFont' => 'sans-serif'] );

        return $pdf->download('Shilmandi_Training_institiute_center_apply_form.pdf');
    }
    public function rplFormDownload($id)
    {
        $regularStudent = RplStudent::find($id);
        $pdf = PDF::loadView('frontend.components.rpl_apply-form',compact('regularStudent'))
            ->setPaper( 'a4', 'portrait' )
            ->setOption( ['dpi' => 350, 'defaultFont' => 'sans-serif'] );

        return $pdf->download('Shilmandi_Training_institiute_center_apply_form.pdf');
    }


    /**
     * PDF Generate.
     */
    public function generate_pdf()
    {
        $data = 'Anowar Hossain Apurbo';
        $pdf  = Pdf::loadView( 'frontend.components.certificate' )
            ->setPaper( 'a4', 'landscape' )
            ->setOption( ['dpi' => 350, 'defaultFont' => 'sans-serif'] );

        return $pdf->download( 'certificate.pdf' );
    }
    /**
     * PDF Download.
     */
    public function download_pdf()
    {
        // $pdf = app('dompdf.wrapper');
        // $contxt = stream_context_create([
        //     'ssl' => [
        //         'verify_peer' => FALSE,
        //         'verify_peer_name' => FALSE,
        //         'allow_self_signed' => TRUE,
        //     ]
        // ]);
        // $pdf = PDF::setOptions(['isHTML5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        // $pdf->getDomPDF()->setHttpContext($contxt);
        // $pdf->loadView('frontend.components.certificate');
        // return $pdf->download('certificate_download ');
        return view('frontend.components.certificate');
    }
}
