<!-- resources/views/comments/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="p-5 bg-blue-400 font-bold mb-5">Edit Comment</h1>
        <form action="{{ route('comments.update', $comment->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="comment" class="font-bold">Comment</label><br/>
                <textarea class="w-1/2" name="comment" id="comment" rows="5" required>{{ $comment->comment }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary hover:bg-yellow-200 bg-yellow-500 px-5 py-3 rounded-full">Update</button>
        </form>
    </div>
@endsection
