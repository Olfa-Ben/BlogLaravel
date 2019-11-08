@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome to my Blog</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('posts.create') }}" method="post"button class="btn btn-primary btn-lg btn-block">You want to Post some thing here?</a>

                    <a href="{{ route('posts.index') }}" method="get" class="btn btn-secondary btn-lg btn-block">See All Posts</a>
                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
