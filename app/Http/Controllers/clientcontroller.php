<?php

namespace App\Http\Controllers;

use App\client;
use Illuminate\Http\Request;

class clientcontroller extends Controller
{
    public function index(){
        $test=client::all();
        return view('admin.client.client',['test'=>$test]);
    }

    function add(Request $request){

        $this->validate($request,
            [
                'name'=>'required',
                'email'=>'required',
                'company'=>'required',
                'job'=>'required',
                'des'=>'required',
                'image'=>'required|mimes:jpeg,bmp,png',
            ]);
        $test=new client();
        $test->name=$request->name;
        $test->email=$request->email;
        $test->company=$request->company;

        $test->contact=$request->des;
        $test->job=$request->job;


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
                'email'=>'required',
                'company'=>'required',
                'job'=>'required',
                'des'=>'required',
                'image'=>'mimes:jpeg,bmp,png',


            ]);
        $test=client::find($id);

        $test->name=$request->name;
        $test->email=$request->email;
        $test->company=$request->company;
        $test->contact=$request->des;
        $test->job=$request->job;


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
        $test=client::find($id);
        $test->delete();
        return back();

    }
}
