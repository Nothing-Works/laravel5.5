@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <h1>
                        Create a Post
                    </h1>
                    <form action="/posts" method="post">
                        {{csrf_field()}}
                        <div class="panel-body">
                                <div class="form-group">
                                    <label for="title">Title:</label>
                                    <input type="text" class="form-control" id="title" name="title">
                                </div>

                                <div class="form-group">
                                    <label for="body">Body:</label>
                                    <textarea class="form-control" id="body" name="body" rows="8"></textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary create-class" >Submit</button>
                                </div>

                                <div class="form-group text-danger">
                                    @if(count($errors))
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{$error}} </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
