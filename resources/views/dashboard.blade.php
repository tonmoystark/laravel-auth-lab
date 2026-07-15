<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>

    <h1>Dashboard</h1>

    <h2>Welcome {{ Auth::user()->name }}</h2>

    <p>Email: {{ Auth::user()->email }}</p>

    <p>User ID: {{ Auth::id() }}</p>

    <form action="{{ route('logout') }}" method="post">

        @csrf
        <button type="submit">Logout</button>
    </form>

</body>
</html>