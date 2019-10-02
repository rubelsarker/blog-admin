@extends('admin.layout')
@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Post Details</h3>
            <a href="{{route('admin.posts.index')}}" class="btn btn-info pull-right">All Post</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

            <h3>Title : {{$post->title}}</h3>
            <h3>Title : {{$post->sub_title}}</h3>
            <h3>slug : {{$post->slug}}</h3>
            <h3>Created At : {{$post->created_at->toDateString()}}</h3>
            <h3>Updated At : {{$post->updated_at->diffForHumans()}}</h3>
            <a class="btn btn-danger" href=""
               onclick="if(confirm('Are You Sure, You want to delete this?')){
                       event.preventDefault();
                       getElementById('form-delete-{{$post->id}}').submit();
                       }else {
                       event.preventDefault();
                       }
                       ">
                Delete
            </a>
            <form action="{{route('admin.posts.destroy',$post->id)}}" method="post" id="form-delete-{{$post->id}}" style="display: none;">
                @csrf
                @method('DELETE')
            </form>


        </div>
        <!-- /.box-body -->
    </div>
@endsection