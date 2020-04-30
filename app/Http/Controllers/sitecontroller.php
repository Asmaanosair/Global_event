<?php

namespace App\Http\Controllers;

use App\about;


use App\gallery;
use App\slider;
use App\service;

use App\team;
use App\testimonial;
use Illuminate\Http\Request;

class sitecontroller extends Controller
{
    public function index(){
    $slider=slider::all();
    $gal=gallery::paginate(6);
        $about=about::find(1);

        $serv=service::all()->where('home',1);
    return view("site.index",['slider'=>$slider,'about'=>$about,'serv'=>$serv,'gal'=>$gal]);
    }
    public function service($id ,$name){



        $service=service::find($id);
        return view("site.service",['service'=>$service]);
    }
    public function our_services(){

        $service=service::all();
        return view("site.our_services",['service'=>$service]);
    }


    public function gallery(){
        $test=gallery::all();
        return view("site.gallery",['test'=>$test]);
    }




    public function about(){
        $about=about::find(1);
        $test=testimonial::all();
        $team=team::all();
        return view("site.about",['about'=>$about,'test'=>$test,'team'=>$team]);
    }
    public function contact(){
        return view("site.contact");
    }
    public function event(){
        return view("site.event");
    }
}
