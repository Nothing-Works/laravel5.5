@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <h1>
                        All the Posts <a href="/posts/create" class="btn bg-info" >New one</a> </h1>
                    @foreach ($posts as $post)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="/posts/{{$post->id}}">{{$post->title}}.{{$post->id}}</a>
                            </div>
                            <div class="panel-body">
                                {{$post->body}}
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $posts->links() }}
                <div class="panel panel-default" v-for="vpost in vposts" v-cloak>
                    <div class="panel-heading">
                        @{{vpost.title}}.@{{vpost.id}}
                    </div>
                    <div class="panel-body">
                        @{{vpost.body}}
                    </div>
                </div>
                <button @click="loadmore" class="bg-info">load more</button>
            </div>
        </div>
    </div>
@endsection