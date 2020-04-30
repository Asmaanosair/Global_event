@extends('layouts.admin_lay')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title text-green">   Client Table</h3>

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
                                <form role="form" action="{{url('/kt_admin/add_client')}}" method="post" enctype="multipart/form-data" >
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
                                            <label for="exampleInputPassword1"> email</label>
                                            <input type="text" class="form-control"  name="email" id="exampleInputPassword1"  placeholder="NAME">
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                         </span>
                                            @endif
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputPassword1"> job</label>
                                            <input type="text" class="form-control"  name="job" id="exampleInputPassword1"  placeholder="NAME">
                                            @if ($errors->has('job'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('job') }}</strong>
                                         </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1"> company</label>
                                            <input type="text" class="form-control"  name="company" id="exampleInputPassword1"  placeholder="NAME">
                                            @if ($errors->has('company'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('company') }}</strong>
                                         </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"> Contact</label>
                                            <textarea type="text" class="form-control"  name="des"  placeholder="NAME"></textarea>
                                            @if ($errors->has('des'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('des') }}</strong>
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
                        <th >  email </th>
                        <th >  job </th>
                        <th >  company </th>
                        <th >  description </th>



                        <th >Image</th>
                        <th >Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($test as $row)
                        <form method="post" action="{{url('/kt_admin/up_client/'.$row->id)}}" enctype="multipart/form-data">
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
                                    <input type="text" name="email" required="required" class="form-control" value="<?php echo $row->email; ?>">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
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
                                    <input type="text" name="company" required="required" class="form-control" value="<?php echo $row->company; ?>">
                                    @if ($errors->has('company'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('company') }}</strong>
                                         </span>
                                    @endif
                                </td>
                                <td>
                                    <textarea type="text" name="des" required="required" class="form-control" rows="7" cols="50" ><?php echo $row->contact; ?></textarea>
                                    @if ($errors->has('des'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('des') }}</strong>
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
                                    <a href="{{url('/kt_admin/del_client/'.$row->id)}}" class="btn btn-danger"> Delete</a>
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