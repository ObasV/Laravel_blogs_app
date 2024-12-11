@extends('layouts.app')

@section('content')
    <h1 class="p-5 bg-blue-400 font-bold mb-5">Create Post</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div >
            <label for="title" class="font-bold">Title</label><br/>
            <input class="p-5 mb-5 w-1/2" type="text" id="title" name="title" placeholder="Enter Title" required>
        </div>
        <div class="form-group">
            <label for="content" class="font-bold">Content</label><br/>
            <textarea class="w-1/2" id="content" name="content" rows="10"  required></textarea>
        </div>
        <button type="submit" class="btn btn-primary hover:bg-yellow-200 bg-yellow-500 px-5 py-3 rounded-full">Create Post</button>
    </form>
@endsection