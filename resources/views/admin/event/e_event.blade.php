@extends('layouts.admin_lay')

@section('content')
    <a href="{{url('/kt_admin/event')}}" class="btn btn-warning pull-right"> Show All  </a>
    <form role="form" action="{{url('/kt_admin/event',$event->id)}}" method="post" enctype="multipart/form-data" >
        {{csrf_field()}}
        <div class="box-body">

            <div class="form-group">
                <label for="exampleInputPassword1" dir="rtl"> name   </label>
                <input type="text" class="form-control" name="head" id="exampleInputPassword1" value="{{$event->name}}" placeholder="Title ">
                @if ($errors->has('head'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('head') }}</strong>
                                         </span>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1" dir="rtl"> الاسم   </label>
                <input type="text" class="form-control" name="head_ar"  value="{{$event->name_ar}}"id="exampleInputPassword1"  placeholder="Title ">
                @if ($errors->has('head_ar'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('head_ar') }}</strong>
                                         </span>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"> Simple Description</label>
                <textarea type="text" class="form-control"   name="s_des" id="exampleInputPassword1" placeholder="Description">{{$event->s_des}}</textarea>
                @if ($errors->has('s_des'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('s_des') }}</strong>
                                         </span>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1"> وصف مبسط  </label>
                <textarea type="text" class="form-control"   name="s_des_ar" id="exampleInputPassword1" placeholder="Description">a{{$event->s_des_ar}}</textarea>
                @if ($errors->has('s_des_ar'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('s_des_ar') }}</strong>
                                         </span>
                @endif
            </div>


            <div class="form-group">
                <label for="exampleInputPassword1"> Description</label>
                <textarea type="text" class="form-control"  id="editor3"  rows="50" name="des" id="exampleInputPassword1" placeholder="Description">{{$event->des}}</textarea>
                @if ($errors->has('des'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('des') }}</strong>
                                         </span>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1"> تفاصيل </label>
                <textarea type="text" class="form-control"  id="editor2"  rows="50" name="des_ar" id="exampleInputPassword1" placeholder="Description"> {{$event->des_ar}}</textarea>
                @if ($errors->has('des_ar'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('des_ar') }}</strong>
                                         </span>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1" > Image </label>
                @if($event->img!=null)
                    <img width="70px" src="{{asset('img/'.$event->img)}}">
                @else
                    <p >  Please Uploade Image</p>
                @endif
                <input type="file" class="form-control" name="image" style="margin-top: 5px;">
                @if ($errors->has('image'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                @endif

            </div>



            <div class="form-group">
                <label for="exampleInputPassword1" dir="rtl"> start   </label>
                <input type="date" class="form-control" name="start" id="exampleInputPassword1" value="{{$event->start}}" placeholder="Title ">
                @if ($errors->has('start'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('start') }}</strong>
                                         </span>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1" dir="rtl"> END   </label>
                <input type="date" class="form-control" name="end" id="exampleInputPassword1"  value="{{$event->end}}" placeholder="Title ">
                @if ($errors->has('end'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('end') }}</strong>
                                         </span>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">  where  </label>
                <textarea type="text" class="form-control"   name="where" id="exampleInputPassword1" placeholder="Description"> {{$event->where_en}}</textarea>
                @if ($errors->has('where'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('where') }}</strong>
                                         </span>
                @endif
            </div>


            <div class="form-group">
                <label for="exampleInputPassword1">  وصف المكان  </label>
                <textarea type="text" class="form-control"   name="where_ar" id="exampleInputPassword1" placeholder="Description"> {{$event->where_ar}}</textarea>
                @if ($errors->has('where_ar'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('where_ar') }}</strong>
                                         </span>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">  when  </label>
                <textarea type="text" class="form-control"   name="when" id="exampleInputPassword1" placeholder="Description"> {{$event->when_en}}</textarea>
                @if ($errors->has('when'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('when') }}</strong>
                                         </span>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">  متى   </label>
                <textarea type="text" class="form-control"   name="when_ar" id="exampleInputPassword1" placeholder="Description"> {{$event->when_ar}}</textarea>
                @if ($errors->has('when_ar'))
                    <span class="help-block">
                                            <strong>{{ $errors->first('when_ar') }}</strong>
                                         </span>
                @endif
            </div>




            <button type="submit" class="form-control btn-success"> Save</button>

        </div>


    </form>

@endsection