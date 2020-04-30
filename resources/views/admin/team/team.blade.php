@extends('layouts.admin_lay')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title text-green">  our Team Table</h3>

                    <button type="button" class="btn btn-warning pull-right text-blue" data-toggle="modal" data-target="#modal-warning">
                        Add New
                    </button>

                    <div class="modal modal-warning fade" id="modal-warning">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Add New  </h4>
                                </div>
                                <form role="form" action="{{url('/kt_admin/add_team')}}" method="post" enctype="multipart/form-data" >
                                    <div class="modal-body">
                                        {{csrf_field()}}

                                        <div class="form-group">
                                            <label for="exampleInputPassword1"> Name</label>
                                            <input type="text" class="form-control"  name="name" id="exampleInputPassword1"  placeholder="NAME">
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                         </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1"> Job</label>
                                            <input type="text" class="form-control"  name="job" id="exampleInputPassword1"  placeholder="NAME">
                                            @if ($errors->has('job'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('job') }}</strong>
                                         </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1"> Facebook</label>
                                            <input type="text" class="form-control"  name="fb" id="exampleInputPassword1"  placeholder="NAME">
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('fb') }}</strong>
                                         </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1"> Twitter</label>
                                            <input type="text" class="form-control"  name="tw" id="exampleInputPassword1"  placeholder="NAME">
                                            @if ($errors->has('tw'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('tw') }}</strong>
                                         </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"> Instagram</label>
                                            <input type="text" class="form-control"  name="insta" id="exampleInputPassword1"  placeholder="NAME">
                                            @if ($errors->has('insta'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('insta') }}</strong>
                                         </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"> linkedIn</label>
                                            <input type="text" class="form-control"  name="in" id="exampleInputPassword1"  placeholder="NAME">
                                            @if ($errors->has('in'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('in') }}</strong>
                                         </span>
                                            @endif
                                        </div>











                                        <div class="form-group">
                                            <label for="exampleInputPassword1" > Image </label>
                                            <input type="file" rows="6" class="form-control"   name="image" id="exampleInputPassword1" placeholder="Link">

                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-outline">Save changes</button>
                                    </div>
                                </form>

                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    <div class="box-tools">

                    </div>
                </div>

            </div>
            <div class="containers">
                <table class="table table-striped projects text-center">
                    <thead>
                    <tr>

                        <th >  name </th>
                        <th >  job </th>
                        <th >  facebook </th>
                        <th >  twitter </th>
                        <th > instagram </th>
                        <th > linkedin </th>


                        <th >Image</th>
                        <th >Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($test as $row)
                        <form method="post" action="{{url('/kt_admin/up_team/'.$row->id)}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <tr>

                                <td>
                                    <input type="text" name="name" required="required" class="form-control" value="<?php echo $row->name; ?>">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                         </span>
                                    @endif
                                </td>

                                <td>
                                    <input type="text" name="job" required="required" class="form-control" value="<?php echo $row->job; ?>">
                                    @if ($errors->has('job'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('job') }}</strong>
                                         </span>
                                    @endif
                                </td>
                                <td>
                                    <input type="text" name="fb" required="required" class="form-control" value="<?php echo $row->fb; ?>">
                                    @if ($errors->has('fb'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('fb') }}</strong>
                                         </span>
                                    @endif
                                </td>

                                <td>
                                    <input type="text" name="tw" required="required" class="form-control" value="<?php echo $row->tw; ?>">
                                    @if ($errors->has('tw'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('tw') }}</strong>
                                         </span>
                                    @endif
                                </td>

                                <td>
                                    <input type="text" name="insta" required="required" class="form-control" value="<?php echo $row->insta; ?>">
                                    @if ($errors->has('insta'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('insta') }}</strong>
                                         </span>
                                    @endif
                                </td>
                                <td>
                                    <input type="text" name="in" required="required" class="form-control" value="<?php echo $row->in; ?>">
                                    @if ($errors->has('in'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('in') }}</strong>
                                         </span>
                                    @endif
                                </td>

                                <td>
                                    @if($row->image!=null)
                                        <img width="70px" src="{{asset('img/'.$row->image)}}">
                                    @else
                                        <p >  Please Uploade Image</p>
                                    @endif
                                    <input type="file" class="form-control" name="image" style="margin-top: 5px;">
                                    @if ($errors->has('image'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                    @endif
                                </td>




                                <td>
                                    <button type="submit" class="btn btn-success btn-md">Save  </button>
                                </td>
                                <td>
                                    <a href="{{url('/kt_admin/del_team/'.$row->id)}}" class="btn btn-danger"> Delete</a>
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