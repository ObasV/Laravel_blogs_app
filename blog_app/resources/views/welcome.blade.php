<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog app</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
       
        <script src="https://cdn.tailwindcss.com"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="p-4 bg-blue-100">
        <h1 class="w-1/2 mx-auto justify-center text-center mb-5 font-bold">Welcome to the Blog App</h1>
        <button class="w-1/3 mx-auto justify-center text-center mb-10 font-bold hover:bg-yellow-200 bg-yellow-500 px-5 py-3 rounded-full"><a href="{{route('posts.index')}}"> Blog posts</a></button><br/>
        <button class="w-1/3 mx-auto justify-center text-center font-bold hover:bg-yellow-200 bg-yellow-500 px-5 py-3 rounded-full"><a href="{{route('comments.index')}}"> Comments</a></button>
    </body>
</html>
