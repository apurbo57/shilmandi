<?php

namespace App\Http\Controllers\Forntend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class siteController extends Controller
{
    public function index(){
        return view('frontend.home');
    }

    public function contact(){
        return view('frontend.contact');
    }
}
