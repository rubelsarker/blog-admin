@extends('admin.layout')
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">{{$category->name}} Details</h3>
            <a href="{{route('admin.categories.index')}}" class="btn btn-info pull-right">All Category</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

            <h3>Category : {{$category->name}}</h3>
            <h3>slug : {{$category->slug}}</h3>
            <h3>Created At : {{$category->created_at->toDateString()}}</h3>
            <h3>Updated At : {{$category->updated_at->diffForHumans()}}</h3>
            <a class="btn btn-danger" href=""
               onclick="if(confirm('Are You Sure, You want to delete this?')){
                       event.preventDefault();
                       getElementById('form-delete-{{$category->id}}').submit();
                       }else {
                       event.preventDefault();
                       }
                       ">
                Delete
            </a>
            <form action="{{route('admin.categories.destroy',$category->id)}}" method="post" id="form-delete-{{$category->id}}" style="display: none;">
                @csrf
                @method('DELETE')
            </form>


        </div>
        <!-- /.box-body -->
    </div>
@endsection