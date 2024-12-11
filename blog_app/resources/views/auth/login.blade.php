<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-4 bg-blue-100">
    <h1 class="w-1/2 mx-auto justify-center text-center mb-5 font-bold">Login</h1>

    <form method="POST" action="{{ route('login') }}" class="container w-1/2 mx-auto justify-center ">
        @csrf

        <div>
            <label class="font-bold" for="email">Email Address</label><br/>
            <input class="p-5 mb-5" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label class="font-bold" for="password">Password</label><br/>
            <input class="p-5 mb-5" id="password" type="password" name="password" required autocomplete="current-password">
            @error('password')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary hover:bg-yellow-200 bg-yellow-500 px-5 py-3 rounded-full">Login</button>
    </form>
</body>
</html>