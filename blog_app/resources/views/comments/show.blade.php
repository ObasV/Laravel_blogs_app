<!-- resources/views/comments/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <a href='{{route('comments.index')}}' class="btn btn-primary hover:bg-yellow-200 bg-yellow-500 px-5 py-3 rounded-full">Back to comments</a> <br/><br/>
        <h1 class="bg-yellow-500 p-2 font-medium rounded-t-md mb-2">Comment Detail</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="font-bold">Comment ID: {{ $comment->id }}</h5>
                <p class="bg-yellow-500 p-2 font-bold rounded-t-md">Post: {{ $comment->post->title }}</p>
                <p class="hover:bg-blue-200 p-2 bg-blue-500 text-2xl mb-5">Comment: {{ $comment->comment }}</p>
                <p class="font-bold">User: {{ $comment->user->name }}</p>
                
            </div>
        </div>
    </div>
@endsection
