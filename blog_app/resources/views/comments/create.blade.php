<!-- resources/views/comments/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="p-5 bg-blue-400 font-bold mb-5">Add Comment</h1>
        <form action="{{ route('comments.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="comment" class="font-bold">Comment</label><br/>
                <textarea class="w-1/2" name="comment" id="comment" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="post_id" class="font-bold">Post</label><br/>
                <select class="p-5 mb-5 w-1/2" name="post_id" id="post_id" required>
                    @foreach($posts as $post)
                        <option value="{{ $post->id }}">{{ $post->title }}</option>
                    @endforeach
                </select>
            </div>
            <button  class="btn btn-primary hover:bg-yellow-200 bg-yellow-500 px-5 py-3 rounded-full" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
