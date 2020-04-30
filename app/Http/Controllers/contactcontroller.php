<?php

namespace App\Http\Controllers;

use App\contact;

use Illuminate\Http\Request;

class contactcontroller extends Controller
{
    function index()
    {
        $con = contact::all();


        return view('admin.contact.contact', compact('con'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,
            [
                'fb' => 'required',
                'tw' => 'required',
                'yt' => 'required',
                'in' => 'required',

                'insta' => 'required',
                'gm' => 'required',

                'img'=>'dimensions:min_width=1600,min_height=700|mimes:jpeg,bmp,png'
            ]);
        $con = contact::find($id);

        $con->fb = $request->fb;
        $con->tw = $request->tw;
        $con->yt = $request->yt;
        $con->in = $request->in;
        $con->gm = $request->gm;


        $con->insta = $request->insta;

        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $con->logo=$filname1;
        }


        if($con->save()){

            return back();
        }
    }




}
