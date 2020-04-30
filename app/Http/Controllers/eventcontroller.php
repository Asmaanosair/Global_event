<?php

namespace App\Http\Controllers;
use App\event;
use Illuminate\Http\Request;

class eventcontroller extends Controller
{
    public function index()
    {
        $test = event::all();
        return view('admin.event.event', ['test' => $test]);

    }

    public function create()
    {
        $category=event::all();
        return view('admin.event.c_event',['category'=>$category]);

    }

    public function edit($id)
    {
        $event=event::find($id);

        return view('admin.event.e_event',['event'=>$event]);

    }

    function add(Request $request)
    {
        $this->validate($request,
            [
                'head' => 'required',
                'head_ar' => 'required',
                'des' => 'required',
                'des_ar' => 'required',
                's_des_ar' => 'required',
                's_des' => 'required',
                'image' => 'required',
                'when' => 'required',
                'where_ar' => 'required',
                'when_ar' => 'required',
                'where' => 'required',
                'start' => 'required',
                'end' => 'required',

            ]);
        $test = new event();
        $test->name = $request->head;
        $test->name_ar = $request->head_ar;
        $test->des= $request->des;
        $test->des_ar= $request->des_ar;
        $test->s_des= $request->s_des;
        $test->s_des_ar= $request->s_des_ar;
        $test->when_en = $request->when;
        $test->when_ar = $request->when_ar;
        $test->where_en = $request->where;
        $test->where_ar = $request->where_ar;
        $test->start = $request->start;
        $test->end = $request->end;
        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->img=$filname1;
        }

        if ($test->save()) {


            return redirect("kt_admin/event");
        }else{
            return back();
        }
    }


    function update(Request $request ,$id)
    {
        $this->validate($request,
            [
                'head' => 'required',
                'head_ar' => 'required',
                'des' => 'required',
                'des_ar' => 'required',
                's_des_ar' => 'required',
                's_des' => 'required',

                'when' => 'required',
                'where_ar' => 'required',
                'when_ar' => 'required',
                'where' => 'required',
                'start' => 'required',
                'end' => 'required',
            ]);
        $test = event::find($id) ;
        $test->name = $request->head;
        $test->name_ar = $request->head_ar;
        $test->des= $request->des;
        $test->des_ar= $request->des_ar;
        $test->s_des= $request->s_des;
        $test->s_des_ar= $request->s_des_ar;
        $test->when_en = $request->when;
        $test->when_ar = $request->when_ar;
        $test->where_en = $request->where;
        $test->where_ar = $request->where_ar;
        $test->start = $request->start;
        $test->end = $request->end;
        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->img=$filname1;
        }

        if ($test->save()) {



            return redirect("/kt_admin/event");


        }else{

            return back();
        }
    }


    function delete($id){
        $slider=event::find($id);
        $slider->delete();
        return back();

    }
}
