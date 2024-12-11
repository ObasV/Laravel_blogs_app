@extends('layouts.app')

@section('content')
    <h1 class='text-5xl mb-6'>Posts</h1>
    <a href = '{{route( 'posts.create')}}' class="p-3 text-blue-700 bg-gray-300 rounded-full">Create post</a>

    <br/>
    <br/>
    <br/>
    
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    @foreach ($posts as $post)
        <div class="card mb-5">
            <div class="card-header">
                <a href="{{ route('posts.show', $post) }}" class="font-bold hover:bg-blue-500 p-2 rounded-full">{{ $post->title }}</a>

                <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-primary float-right bg-blue-500 hover:bg-blue-200 px-5 py-3 text-white-700 rounded-full mx-4">Edit</a>

                <form action="{{ route('posts.destroy', $post) }}" method="POST" class="float-right bg-red-500 hover:bg-red-200 px-5 py-3 text-white-700 rounded-full mx-4">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </div>
            <div class="card-body">
                <p class="card-text border-4 py-5 border-blue-400 mb-3">{{ Str::limit($post->content, 100) }}</p>
                <a href="{{ route('posts.show', $post) }}" class="btn btn-primary bg-yellow-500 hover:bg-yellow-200 text-white-700 rounded-full mt-7 px-5 py-1 ">Read More</a>
            </div>
        </div>
    @endforeach

    @can('', App\Models\Post::class)
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
    @endcan
@endsection