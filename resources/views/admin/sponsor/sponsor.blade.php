@extends('layouts.admin_lay')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title text-green">   Sponsors Table</h3>

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
                                <form role="form" action="{{url('/kt_admin/add_sponsor')}}" method="post" enctype="multipart/form-data" >
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
                                            <label for="exampleInputPassword1"> الاسم</label>
                                            <input type="text" class="form-control"  name="title" id="exampleInputPassword1"  placeholder="NAME">
                                            @if ($errors->has('title'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('title') }}</strong>
                                         </span>
                                            @endif
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputPassword1"> اسم الشركه </label>
                                            <input type="text" class="form-control"  name="company" id="exampleInputPassword1"  placeholder="NAME">
                                            @if ($errors->has('company'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('company') }}</strong>
                                         </span>
                                            @endif
                                        </div>



                                        <div class="form-group">
                                            <label for="exampleInputPassword1"> نشاط  الشركه </label>
                                            <input type="text" class="form-control"  name="service" id="exampleInputPassword1"  placeholder="NAME">
                                            @if ($errors->has('service'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('service') }}</strong>
                                         </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">الاتصال </label>
                                            <input type="text" class="form-control"  name="contact" id="exampleInputPassword1"  placeholder="NAME">
                                            @if ($errors->has('contact'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('contact') }}</strong>
                                         </span>
                                            @endif
                                        </div>



                                        <div class="form-group">
                                            <label for="exampleInputPassword1"> Link</label>
                                            <textarea type="text" class="form-control"  name="link"  placeholder="NAME"></textarea>
                                            @if ($errors->has('link'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('link') }}</strong>
                                         </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1"> Types</label>
                                           <select class="form-control"  name="type">
                                               @foreach($type as $row2)
                                               <option value="{{$row2->id}}">{{$row2->name}}</option>
                                                   @endforeach
                                           </select>
                                            @if ($errors->has('type'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('type') }}</strong>
                                         </span>
                                            @endif
                                        </div>



                                        <div class="form-group">
                                            <label for="exampleInputPassword1" > Image </label>
                                            <input type="file" rows="6" class="form-control"   name="image" id="exampleInputPassword1" placeholder="Link">
                                            @if ($errors->has('image'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('image') }}</strong>
                                         </span>
                                            @endif
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputPassword1" > البطاقه الضريبيه  </label>
                                            <input type="file" rows="6" class="form-control"   name="attach[]" id="exampleInputPassword1" placeholder="Link" multiple>
                                            @if ($errors->has('attach'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('attach') }}</strong>
                                         </span>
                                            @endif
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
                        <th >  الاسم </th>
                        <th >  اللينك  </th>
                        <th >  Type  </th>



                        <th >Image</th>
                        <th >Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($test as $row)
                        <form method="post" action="{{url('/kt_admin/up_sponsor/'.$row->id)}}" enctype="multipart/form-data">
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
                                    <input type="text" name="title" required="required" class="form-control" value="<?php echo $row->name_ar; ?>">
                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('title') }}</strong>
                                         </span>
                                    @endif
                                </td>
                                <td>
                                    <textarea type="text" name="des" required="required" class="form-control" ><?php echo $row->link; ?></textarea>
                                    @if ($errors->has('des'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('des') }}</strong>
                                         </span>
                                    @endif
                                </td>




                                <td>

                                    <select class="form-control"  name="type">
                                        @php(
                                        $element=\App\sponsor_type::find($row->sponsor_type_id)
                                        )
                                        <option value="{{$element->id}}" selected> {{$element->name}}</option>
                                        @foreach($type as $row2)
                                            <option value="{{$row2->id}}">{{$row2->name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('type'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('type') }}</strong>
                                         </span>
                                    @endif
                                </td>



                                <td>



                                    @if($row->img!=null)
                                        <img width="70px" src="{{asset('img/'.$row->img)}}">
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
                                    <a href="{{url('/kt_admin/del_sponsor/'.$row->id)}}" class="btn btn-danger"> Delete</a>
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