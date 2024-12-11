<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1>Create User</h1>

    <form method="POST" action="{{ route('users.store') }}">
        @csrf

        <div>
            <label for="name" class="font-bold">Name</label><br/>
            <input class="p-5 mb-5 w-1/2" id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
            @error('name')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="email" class="font-bold">Email Address</label><br/>
            <input class="p-5 mb-5 w-1/2" id="email" type="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="password" class="font-bold">Password</label><br/>
            <input class="p-5 mb-5 w-1/2" id="password" type="password" name="password" required autocomplete="new-password">
            @error('password')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="password-confirm" class="font-bold">Confirm Password</label><br/>
            <input class="p-5 mb-5 w-1/2" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
        </div>

        <button type="submit" class="btn btn-primary hover:bg-yellow-200 bg-yellow-500 px-5 py-3 rounded-full">Create User</button>
    </form>
</body>
</html>