<!-- resources/views/posts/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="p-5 bg-blue-400 font-bold mb-5">Edit Post</h1>
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title" class="font-bold">Title</label><br/>
                <input type="text" class="p-5 mb-5 w-1/2" name="title" id="title" value="{{ $post->title }}" required>
            </div>
            <div class="form-group">
                <label for="content" class="font-bold">Content</label><br/>
                <textarea class="w-1/2" name="content" id="content" rows="5" required>{{ $post->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary hover:bg-yellow-200 bg-yellow-500 px-5 py-3 rounded-full">Update</button>
        </form>
    </div>
@endsection
