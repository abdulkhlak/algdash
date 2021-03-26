@extends('layouts.admin.master')
@section('title')
    {{ __('Data List')}}
@endsection
@section('content')

    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <section class="content-header">

                    <form action="{{route('deleteall')}}" method="post">
                  @csrf
                        <input type="hidden" name="delete" value="">
                        <button class="btn btn-primary" type="submit" id="delete" >Delete all</button>


                </section>
                <div class="col-xs-12">


                    <div class="box">
                        <div class="box-header">
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>{{ __('SL')}}</th>
                                    <th>{{ __('Property Type')}}</th>
                                    <th>{{ __('Number Of Bedroom')}}</th>
                                    <th>{{ __('Number Of Bathroom')}}</th>
                                    <th>{{ __('Price Range')}}</th>
                                    <th>{{ __('Interest Message')}}</th>
                                    <th>{{ __('Phone Number')}}</th>
                                    <th>{{ __('Action')}}</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($all_data as $key => $data)


                                    <tr style="@if($data->is_read==0)font-weight: bolder; color: red; @else color:green;
                                    @endif">


                                        <td><input type="checkbox" name="delete[]" class="checkboxes"
                                                   value="{{
                                        $data->id }}" /> {{$key+1}}</td>
                                        <td>@if($data->property)
                                                {{$data->property->property_name}}
                                        @endif
                                        </td>
                                        <td>@if($data->bedroom)
                                                {{$data->bedroom->bedroom_name}}
                                        @endif
                                        </td>
                                        <td>@if($data->bathroom)
                                                {{$data->bathroom->bathroom_name}}
                                        @endif
                                        </td>
                                        <td>@if($data->price)
                                                {{$data->price->price}}
                                        @endif
                                        </td>
                                        <td>@if($data->interest)
                                                {{$data->interest}}
                                        @endif
                                        </td>
                                        <td>@if($data->phone)
                                                {{$data->phone}}
                                        @endif
                                        </td>
                                        <td>
                                            <a href="{{route('details',$data->id)}}" id="delete" class="btn btn-sm
                                            btn-primary">Details</a></td>

                                    </tr>
                                @endforeach



                                </tbody>
                                </form>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->

    </section><!-- /.content -->

@section('script')
    <!-- Notify allert script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
    <!-- Sweet Alert script -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    @if(session()->has('success'))
        <script type="text/javascript">
            $(function () {
                $.notify("{{session()->get('success')}}",{ globalPosition: 'top right',className:'success'});
            });
        </script>
    @endif

    <!-- Notify allert script end-->

    <!-- Sweet alert-->
    <script>
        $(function () {
            $(document).on('click','#delete',function (e) {
                e.preventDefault();
                var link=$(this).attr("ddd");
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.ddd=link;
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            })
        })
    </script>
    <!-- Sweet alert end -->
@endsection
@endsection

