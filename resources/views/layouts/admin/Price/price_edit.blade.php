@extends('layouts.admin.master')
@section('title')
    {{ __('Update Price Range')}}
@endsection
@section('content')

    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <form method="post" action="{{route('price_update',$price_edit->id)}}" id="propertyFrom">
                    @csrf
                    <div class="form-content">
                        <div class="row">

                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary">Update Price</button>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Price Range</label>
                                    <input type="text" class="form-control" name="price" id="price"
                                           value="{{$price_edit->price}}"/>
                                    <font style="color: red">{{($errors->has('price'))?($errors->first('price')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>sequence</label>
                                    <input type="text" class="form-control" name="sequence" id="sequence" value="{{$price_edit->sequence}}"/>
                                    <font style="color: red">{{($errors->has('sequence'))?($errors->first('sequence')):''}}</font>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <select class="form-control"  name="status" style="width: 100%;">
                                        <option value="1" {{($price_edit->status =="1")
                                        ?"selected":""}}>Publish</option>
                                        <option value="0" {{($price_edit->status =="0")
                                        ?"selected":""}}>Unpublish</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Price</button>
                        </div>

                    </div>
                </form>
            </div><!-- /.row -->
        </section><!-- /.content -->

    </section><!-- /.content -->
@endsection

