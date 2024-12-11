<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-4 bg-blue-100">
    <h1 class="font-bold">Users</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>