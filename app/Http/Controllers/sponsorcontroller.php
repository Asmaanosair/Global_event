<?php

namespace App\Http\Controllers;

use App\sponsor;
use App\sponsor_type;
use Illuminate\Http\Request;

class sponsorcontroller extends Controller
{
    public function index(){
        $test=sponsor::all();
        $type=sponsor_type::all();
        return view('admin.sponsor.sponsor',['test'=>$test,'type'=>$type]);
    }

    function add(Request $request){

        $this->validate($request,
            [


                'name'=>'required',
                'title'=>'required',
                'company'=>'required',
                'type'=>'required',
                'link'=>'required',
                'contact'=>'required',
                'service'=>'required',
                'image'=>'required|mimes:jpeg,bmp,png',
                'attach'=>'required',


            ]);
        $test=new sponsor();
        $test->name=$request->name;
        $test->name_ar=$request->title;
        $test->sponsor_type_id=$request->type;
        $test->link=$request->link;
        $test->company=$request->company;
        $test->contact=$request->contact;
        $test->service=$request->service;
        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->img=$filname1;
        }
        $files = [];
        foreach ($request->file('attach') as $media) {
            if (!empty($media)) {
                $destinationPath = 'img';
                $filename = $media->getClientOriginalName();
                $media->move($destinationPath, $filename);
                $files[] = $filename;
            }
        }
        $test->attachment=implode(',',$files);
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
        $test=sponsor::find($id);
        $test->name=$request->name;
        $test->name_ar=$request->title;
        $test->link=$request->des;
        $test->sponsor_type_id=$request->type;
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
        $test=sponsor::find($id);
        $test->delete();
        return back();

    }
}
