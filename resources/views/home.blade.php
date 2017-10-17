@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        You are logged in!
                        <div class="title m-b-md">
                            <button @click="loaduser" class="bg-info">load more</button>
                        </div>
                        <div class="panel panel-default" v-for="user in users" v-cloak>
                            <div class="panel-heading">
                                @{{user.name}}
                            </div>
                            <div class="panel-body">
                                @{{user.email}}
                            </div>
                        </div>
                        <div class="container">
                            <a href="/downloads">download</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
