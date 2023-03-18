<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $testimonials=Testimonial::where('is_active',1)->limit(3)->latest('id')->select(['id','client_name','client_message','client_designation','client_image'])->get();


        return view('frontend.pages.home',compact('testimonials'
    ));

    }
}
