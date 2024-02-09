@extends('layouts/main')

@section('container')
    <div class="container mt-4">
        <h1>{{ $category->name }}</h1>
        @foreach ($post as $item)
            <h6>{{ $item->title }}</h6>
            <p>{{ $item->excerpt }}</p>
        @endforeach
    </div>
@endsection

