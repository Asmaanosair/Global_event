@extends('layouts.admin_lay')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title text-green">  our Types Of sponsor Table</h3>


                    <div class="box-tools">

                    </div>
                </div>

            </div>
            <div class="containers">
                <table class="table table-striped projects text-center">
                    <thead>
                    <tr>

                        <th >  name </th>
                        <th >  name_ar </th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($test as $row)
                        <form method="post" action="{{url('/kt_admin/up_type/'.$row->id)}}" enctype="multipart/form-data">
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
                                    <input type="text" name="name_ar" required="required" class="form-control" value="<?php echo $row->name_ar; ?>">
                                    @if ($errors->has('name_ar'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name_ar') }}</strong>
                                         </span>
                                    @endif
                                </td>


                                <td>
                                    <button type="submit" class="btn btn-success btn-md">Save  </button>
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