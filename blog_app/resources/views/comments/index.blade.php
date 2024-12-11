<!-- resources/views/comments/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="class='text-5xl mb-6">
        <h1 class="text-5xl mb-6">Comments</h1>
        <a href="{{ route('comments.create') }}" class="btn btn-primary bg-yellow-500 mx-1 hover:bg-yellow-200 px-5 py-3 text-white-700 rounded-full">Add Comment</a>
        <table class="mt-4 px-2">
            <thead class="bg-yellow-500">
                <tr class="p-2">
                    <th>ID</th>
                    <th>Comment</th>
                    <th>User</th>
                    <th>Post</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="bg-blue-200">
                @foreach($comments as $comment)
                    <tr class="mx-5 hover:bg-blue-300">
                        <td>{{ $comment->id }}</td>
                        <td>{{ $comment->comment }}</td>
                        <td>{{ $comment->user->name }}</td>
                        <td>{{ $comment->post->title }}</td>
                        <td>
                            <a href="{{ route('comments.show', $comment->id) }}" class="btn btn-sm btn-primary float-right bg-yellow-500 mx-1 hover:bg-yellow-200 px-5 py-3 text-white-700 rounded-full mx-4">View</a>
                            <a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-sm btn-primary float-right bg-blue-500 mx-1 hover:bg-blue-200 px-5 py-3 text-white-700 rounded-full mx-4"">Edit</a>
                            <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-primary float-right bg-red-500 mx-1 hover:bg-red-200 px-5 py-3 text-white-700 rounded-full mx-4">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
