@extends('layouts/main')

@section('container')
    <div class="container mt-4">
        @foreach ($posts as $post)
            <div class="card mb-4">
                <div class="card-body">
                    <p class="card-text"><small class="text-muted">By. <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/blog/category/{{ $post->category->name }}" class="text-decoration-none">{{ $post->category->name }}</a></small></p>
                    <p>{{ $post->created_at }}</p>
                    <a class="card-title" href="/blog/{{ $post->slug }}"><h3>{{ $post->title }}</h3></a>
                    <p class="card-text">{{ $post->excerpt }}</p> <!-- Menggunakan excerpt untuk ringkasan post -->
                    <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Read more</a> <!-- Tombol untuk membaca lebih lanjut -->
                </div>
            </div>
        @endforeach
    </div>
@endsection
