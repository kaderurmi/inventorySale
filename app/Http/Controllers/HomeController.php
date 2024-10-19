<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function HomePage(){
        return view('pages.home');
    }
    function AboutPage(){
        return view('pages.about');
    }
    function CompanyPage(){
        return view('pages.company');
    }
    function ServicePage(){
        return view('pages.service');
    }
    function TestimonialPage(){
        return view('pages.testimonial');
    }
    
    
}