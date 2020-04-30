<?php

namespace App\Http\Controllers;

use App\about;
use Illuminate\Http\Request;

class aboutcontroller extends Controller
{

    public function edit($id){
        $test=about::find($id);
        return view('admin.about.e_about',['test'=>$test]);
    }



    function update(Request $request,$id){

        $this->validate($request,
            [

                'des'=>'required',
                'head'=>'required',
                's_des'=>'required',
                'image'=>'mimes:jpeg,bmp,png',


            ]);
        $test=about::find($id);
        $test->des=$request->des;
        $test->title=$request->head;
        $test->s_des=$request->s_des;
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
}
