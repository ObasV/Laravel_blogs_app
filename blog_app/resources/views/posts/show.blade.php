@extends('layouts.app')

@section('content')


    <a href='{{route('posts.index')}}' class="btn btn-primary bg-yellow-500 px-5 py-3 rounded-full">Back to posts</a> <br/><br/>


    <h1 class="bg-yellow-500 p-2 font-bold rounded-t-md">{{ $post->title }}</h1>
    <p class="hover:bg-blue-200 p-2 bg-blue-500 text-2xl mb-5">{{ $post->content }}</p>

    <h2 class="bg-yellow-500 p-2 font-medium rounded-t-md mb-2">Comments</h2>
    <ul>
        @foreach ($post->comments as $comment)
            <li class="mb-4">
                <span class="font-bold">{{ $comment->user->name }}</span> <br/> {{ $comment->comment }}
            </li>
        @endforeach
    </ul>

    {{-- @can('create', App\Models\Comment::class) --}}
        <form action="{{ route('comments.store', $post) }}" method="POST">
            @csrf
            <textarea class="w-1/2" name="comment" rows="4" placeholder="Add a comment"></textarea><br/>
            <button type="submit" class="btn btn-primary bg-yellow-500 px-5 py-3 rounded-full">Submit Comment</button>
        </form>
    {{-- @endcan --}}
@endsection