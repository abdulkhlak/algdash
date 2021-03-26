@extends('layouts.admin.master')
@section('title')
    {{ __('Create New Bathroom')}}
@endsection
@section('content')

    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <form method="post" action="{{route('bathroom_store')}}" id="bathroomFrom">
                    @csrf
                    <div class="form-content">
                        <div class="row">

                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary">Create New Bathroom</button>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Bathroom Name</label>
                                    <input type="text" class="form-control" name="bathroom_name" id="bathroom_name"
                                           placeholder="Bathroom Name *"
                                           value=""/>
                                    <font style="color: red">{{($errors->has('bathroom_name'))?($errors->first('bathroom_name')):''}}</font>
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
                            <button type="submit" class="btn btn-primary">Create New Bathroom</button>
                        </div>

                    </div>
                </form>
            </div><!-- /.row -->
        </section><!-- /.content -->

    </section><!-- /.content -->

@endsection

