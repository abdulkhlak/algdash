@extends('layouts.admin.master')
@section('title')
    {{ __('Update Bedroom')}}
@endsection
@section('content')

    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <form method="post" action="{{route('bedroom_update',$bedroom_edit->id)}}" id="bedroomFrom">
                    @csrf
                    <div class="form-content">
                        <div class="row">

                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary">Update Bedroom</button>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Bedroom Name</label>
                                    <input type="text" class="form-control" name="bedroom_name" id="bedroom_name"
                                           placeholder="Bedroom Name *"
                                           value="{{$bedroom_edit->bedroom_name}}"/>
                                    <font style="color: red">{{($errors->has('bedroom_name'))?($errors->first('bedroom_name')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <select class="form-control"  name="status" style="width: 100%;">
                                        <option value="1" {{($bedroom_edit->status =="1")
                                        ?"selected":""}}>Publish</option>
                                        <option value="0" {{($bedroom_edit->status =="0")
                                        ?"selected":""}}>Unpublish</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Bedroom</button>
                        </div>

                    </div>
                </form>
            </div><!-- /.row -->
        </section><!-- /.content -->

    </section><!-- /.content -->
@endsection

