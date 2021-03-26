@extends('layouts.admin.master')
@section('title')
    {{ __('Update Property')}}
@endsection
@section('content')

    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <form method="post" action="{{route('property_update',$property_edit->id)}}" id="propertyFrom">
                    @csrf
                    <div class="form-content">
                        <div class="row">

                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary">Update Property</button>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Property Name</label>
                                    <input type="text" class="form-control" name="property_name" id="property_name"
                                           placeholder="Group Name *"
                                           value="{{$property_edit->property_name}}"/>
                                    <font style="color: red">{{($errors->has('property_name'))?($errors->first('property_name')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <select class="form-control"  name="status" style="width: 100%;">
                                        <option value="1" {{($property_edit->status =="1")
                                        ?"selected":""}}>Publish</option>
                                        <option value="0" {{($property_edit->status =="0")
                                        ?"selected":""}}>Unpublish</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Property</button>
                        </div>

                    </div>
                </form>
            </div><!-- /.row -->
        </section><!-- /.content -->

    </section><!-- /.content -->
@endsection

