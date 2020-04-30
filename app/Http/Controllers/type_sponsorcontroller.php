<?php

namespace App\Http\Controllers;

use App\sponsor_type;
use Illuminate\Http\Request;

class type_sponsorcontroller extends Controller
{

    public function index(){
        $test=sponsor_type::all();
        return view('admin.type_sponsor.type',['test'=>$test]);
    }


    function update(Request $request,$id){

        $this->validate($request,
            [

                'name'=>'required|max:200',
                'name_ar'=>'required|max:200',


            ]);
        $test=sponsor_type::find($id);


        $test->name=$request->name;
        $test->name_ar=$request->name_ar;





        if($test->save()){
            return back();
        }

    }

}
