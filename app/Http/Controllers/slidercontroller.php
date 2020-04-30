<?php

namespace App\Http\Controllers;

use App\slider;
use Illuminate\Http\Request;

class slidercontroller extends Controller
{
   public function index(){
       $slider=slider::all();
       return view('admin.slider.slider',['slider'=>$slider]);
   }

    function add(Request $request){

        $this->validate($request,
            [


                'name'=>'required',
                'head'=>'required',
                'image'=>'required|mimes:jpeg,bmp,png',


            ]);
        $test=new slider();


        $test->head=$request->head;
        $test->title=$request->name;


        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->img=$filname1;
        }

        if($test->save()){

            return back();
        }

    }
    function update(Request $request,$id){

        $this->validate($request,
            [

                'name'=>'required',
                'head'=>'required',
                'image'=>'mimes:jpeg,bmp,png',


            ]);
        $test=slider::find($id);
        $test->head=$request->head;
        $test->title=$request->name;


        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->img=$filname1;
        }




        if($test->save()){

            return back();
        }

    }
    function delete($id){
        $test=slider::find($id);
        $test->delete();
        return back();

    }
}
