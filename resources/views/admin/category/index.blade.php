@extends('admin.layout')
@section('stylesheet')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{url('')}}/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endsection
@section('content')
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">All Categories</h3>
                    <a class="btn btn-primary pull-right" href="{{route('admin.categories.create')}}">Create Category</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Created at</th>
                            <th>Updated At</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $key => $category)

                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->slug}}</td>
                            <td>{{$category->created_at->toDateString()}}</td>
                            <td>{{$category->updated_at->diffForHumans()}}</td>
                            <td class="text-center">
                                <a class="btn btn-info" href="{{route('admin.categories.show',$category->id)}}"><i class="fa fa-fw fa-eye-slash"></i></a>
                                <a class="btn btn-primary" href="{{route('admin.categories.edit',$category->id)}}"><i class="fa fa-fw fa-edit"></i></a>
                                <a class="btn btn-danger" href=""
                                   onclick="if(confirm('Are You Sure, You want to delete this?')){
                                       event.preventDefault();
                                       getElementById('form-delete-{{$category->id}}').submit();
                                   }else {
                                           event.preventDefault();
                                   }
                                ">
                                    <i class="fa fa-fw fa-trash-o"></i>
                                </a>
                                <form action="{{route('admin.categories.destroy',$category->id)}}" method="post" id="form-delete-{{$category->id}}" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>

                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Created at</th>
                            <th>Updated At</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
@endsection
@section('script')
    <!-- DataTables -->
    <script src="{{url('')}}/admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{url('')}}/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- page script -->
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@endsection