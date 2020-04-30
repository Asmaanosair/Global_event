
@extends('layouts.admin_lay')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title text-green"> Contact  Table</h3>

                    <div class="box-tools">

                    </div>
                </div>
            </div>
            <div class="containers">
                <table class="table table-striped projects text-center">
                    <thead>
                    <tr>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($con as $row)
                        <form method="post" action="{{url('/kt_admin/up_contact/'.$row->id)}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <tr>

                                <td>


                                    <input type="text" name="fb" required="required" class="form-control" value="<?php echo $row->fb; ?>">
                                    @if ($errors->has('fb'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('fb') }}</strong>
                                         </span>
                                    @endif


                                    <input type="text" name="tw" required="required" class="form-control" value="<?php echo $row->tw; ?>">
                                    @if ($errors->has('tw'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('tw') }}</strong>
                                        </span>
                                    @endif
                                    <input type="text" name="in" required="required" class="form-control" value="<?php echo $row->in; ?>">
                                    @if ($errors->has('in'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('in') }}</strong>
                                         </span>
                                    @endif

                                    <input type="text" name="yt" required="required" class="form-control" value="<?php echo $row->yt; ?>">
                                    @if ($errors->has('yt'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('yt') }}</strong>
                                        </span>
                                    @endif



                                    <input type="text" name="gm" required="required" class="form-control" value="<?php echo $row->gm; ?>">
                                    @if ($errors->has('gm'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('gm') }}</strong>
                                        </span>
                                    @endif
                                    <input type="text" name="insta" required="required" class="form-control" value="<?php echo $row->insta; ?>">
                                    @if ($errors->has('insta'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('insta') }}</strong>
                                         </span>
                                    @endif


                                    @if($row->logo!=null)
                                        <img width="70px" src="{{asset('img/'.$row->logo)}}">
                                    @else
                                        <p >  Please Uploade Image</p>
                                    @endif
                                    <input type="file" class="form-control" name="image" style="margin-top: 5px;">
                                    @if ($errors->has('image'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                    @endif


                                    <button type="submit" class="btn btn-success form-control btn-md">Save Changes </button>

                                </td>


                            </tr>
                        </form>
                    @endforeach

                    </tbody>
                </table>

            </div>

        </div>
    </div>






@endsection
