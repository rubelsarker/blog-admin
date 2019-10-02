@extends('admin.layout')
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">{{$tag->name}} Details</h3>
            <a href="{{route('admin.tags.index')}}" class="btn btn-info pull-right">All Tags</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

            <h3>Category : {{$tag->name}}</h3>
            <h3>slug : {{$tag->slug}}</h3>
            <h3>Created At : {{$tag->created_at->toDateString()}}</h3>
            <h3>Updated At : {{$tag->updated_at->diffForHumans()}}</h3>
            <a class="btn btn-danger" href=""
               onclick="if(confirm('Are You Sure, You want to delete this?')){
                       event.preventDefault();
                       getElementById('form-delete-{{$tag->id}}').submit();
                       }else {
                       event.preventDefault();
                       }
                       ">
                Delete
            </a>
            <form action="{{route('admin.tags.destroy',$tag->id)}}" method="post" id="form-delete-{{$tag->id}}" style="display: none;">
                @csrf
                @method('DELETE')
            </form>


        </div>
        <!-- /.box-body -->
    </div>
@endsection