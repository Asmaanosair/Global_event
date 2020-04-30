@extends('layouts.admin_lay')

@section('content')

    <form role="form" action="{{url('/kt_admin/up_about/'.$test->id)}}" method="post" enctype="multipart/form-data" >
        {{csrf_field()}}
        <div class="box-body">

            <div class="form-group">
                <label for="exampleInputPassword1" dir="rtl"> Title   </label>
                <input type="text" class="form-control" name="head" id="exampleInputPassword1"  value="{{$test->title}}"  placeholder="العنوان الرئيسي ">
                @if ($errors->has('head'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('head') }}</strong>
                                         </span>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">simple Description</label>
                <textarea type="text" class="form-control"  id="editor3"  rows="6" name="s_des" id="exampleInputPassword1" placeholder="Description">{{$test->s_des}}</textarea>
                @if ($errors->has('des'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('des') }}</strong>
                                         </span>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1"> Description</label>
                <textarea type="text" class="form-control"  id="editor1"  rows="6" name="des" id="exampleInputPassword1" placeholder="Description">{{$test->des}}</textarea>
                @if ($errors->has('des'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('des') }}</strong>
                                         </span>
                @endif
            </div>

            @if($test->img!=null)
                <img width="70px" src="{{asset('img/'.$test->img)}}">
            @else
                <p >  Please Uploade Image</p>
            @endif
            <input type="file" class="form-control" name="image" style="margin-top: 5px;">
            @if ($errors->has('image'))
                <span class="help-block">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
            @endif


            <button type="submit" class="form-control btn-success"> Save</button>

        </div>


    </form>

@endsection