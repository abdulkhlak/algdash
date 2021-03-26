@extends('layouts.admin.master')
@section('title')
    {{ __('Create New Property')}}
@endsection
@section('content')

    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <form method="post" action="{{route('property_store')}}" id="propertyFrom">
                    @csrf
                    <div class="form-content">
                        <div class="row">

                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary">Create New Property</button>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Property Name</label>
                                    <input type="text" class="form-control" name="property_name" id="property_name"
                                           placeholder="Property Name *"
                                           value=""/>
                                    <font style="color: red">{{($errors->has('property_name'))?($errors->first('property_name')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <select class="form-control"  name="status" style="width: 100%;">
                                        <option value="1">Publish</option>
                                        <option value="0">Unpublish</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Create New Property</button>
                        </div>

                    </div>
                </form>
            </div><!-- /.row -->
        </section><!-- /.content -->

    </section><!-- /.content -->

@endsection

