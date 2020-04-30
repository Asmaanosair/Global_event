<?php

namespace App\Http\Controllers;

use App\team;
use Illuminate\Http\Request;

class teamcontroller extends Controller
{
    public function index(){
        $test=team::all();
        return view('admin.team.team',['test'=>$test]);
    }

    function add(Request $request){

        $this->validate($request,
            [


                'name'=>'required',
                'fb'=>'required',
                'in'=>'required',
                'tw'=>'required',
                'insta'=>'required',
                'job'=>'required',

                'image'=>'required|mimes:jpeg,bmp,png',


            ]);
        $test=new team();



        $test->name=$request->name;
        $test->job=$request->job;
        $test->fb=$request->fb;
        $test->tw=$request->tw;
        $test->in=$request->in;
        $test->insta=$request->insta;

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
                'fb'=>'required',
                'in'=>'required',
                'tw'=>'required',
                'insta'=>'required',
                'job'=>'required',

                'image'=>'mimes:jpeg,bmp,png',


            ]);
        $test=team::find($id);


        $test->name=$request->name;
        $test->job=$request->job;
        $test->fb=$request->fb;
        $test->tw=$request->tw;
        $test->in=$request->in;
        $test->insta=$request->insta;


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
        $test=team::find($id);
        $test->delete();
        return back();

    }
}
