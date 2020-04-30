<?php

namespace App\Http\Controllers;

use App\gallery;
use Illuminate\Http\Request;

class gallerycontroller extends Controller
{
    public function index(){
        $slider=gallery::all();
        return view('admin.gallery.gallery',['slider'=>$slider]);
    }

    function add(Request $request){

        $this->validate($request,
            [


                'name'=>'required',

                'image'=>'required|mimes:jpeg,bmp,png',


            ]);
        $test=new gallery();



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

                'image'=>'mimes:jpeg,bmp,png',


            ]);
        $test=gallery::find($id);

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
        $test=gallery::find($id);
        $test->delete();
        return back();

    }
}
