@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <h1>
                        Show the Post
                    </h1>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{$post->title}}
                    </div>
                    <div class="panel-body">
                        {{$post->body}}
                    </div>
                </div>
                <div class="container"><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                </div>
                <div class="container" style="padding-top: 20px">
                    <form method="post" action="/posts/{{$post->id}}">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
