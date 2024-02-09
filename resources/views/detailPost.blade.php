@extends('layouts/main')
@section('container')
    <div class="container mt-4">
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title">{{ $post->title }}</h2>
                <p class="card-text">Author: <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/blog/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

                <div class="card-text">{!! $post->body !!}</div>
                <a href="/blog" class="btn btn-primary mt-3">Back to Blog</a>
            </div>
        </div>
    </div>
@endsection
