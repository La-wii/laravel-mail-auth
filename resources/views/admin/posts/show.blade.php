@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Post</h2>
        <div class="card bg-warning">
            <div class="card-header text-uppercase fs-3">
                {{ $post->title }}
            </div>
            <div class="card-body">
                <h5 class="card-title"> {{ $post->slug }}</h5>
                <p class="card-text"> {{ $post->content }}</p>
            </div>
        </div>
        <div class="mt-3">
            <a href="{{ route('admin.posts.index') }} " class="btn btn-primary">Torna indietro</a>
        </div>
    </div>
@endsection