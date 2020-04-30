<?php

namespace App\Http\Controllers;

use App\testimonial;
use Illuminate\Http\Request;

class testimonialcontroller extends Controller
{
    public function index(){
        $test=testimonial::all();
        return view('admin.testimonial.testimonial',['test'=>$test]);
    }

    function add(Request $request){

        $this->validate($request,
            [


                'name'=>'required',
                'title'=>'required',
                'des'=>'required',


                'image'=>'required|mimes:jpeg,bmp,png',


            ]);
        $test=new testimonial();



        $test->name=$request->name;
        $test->title=$request->title;
        $test->des=$request->des;


        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->image=$filname1;
        }

        if($test->save()){

            return back();
        }

    }
    function update(Request $request,$id){

        $this->validate($request,
            [

                'name'=>'required',
                'title'=>'required',
                'des'=>'required',

                'image'=>'mimes:jpeg,bmp,png',


            ]);
        $test=testimonial::find($id);


        $test->name=$request->name;
        $test->title=$request->title;
        $test->des=$request->des;


        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->image=$filname1;
        }


        if($test->save()){
            return back();
        }

    }
    function delete($id){
        $test=testimonial::find($id);
        $test->delete();
        return back();

    }
}
