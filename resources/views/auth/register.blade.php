<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

    <h1>Register</h1>

    <form action="{{ route('register.store') }}" method="POST">
        @csrf

        <div>
            <label>Name</label>
            <input
                type="text"
                name="name"
                placeholder="Enter your name">
        </div>

        <br>

        <div>
            <label>Email</label>
            <input
                type="email"
                name="email"
                placeholder="Enter your email">
        </div>

        <br>

        <div>
            <label>Password</label>
            <input
                type="password"
                name="password"
                placeholder="Password">
        </div>

        <br>

        <div>
            <label>Confirm Password</label>
            <input
                type="password"
                name="password_confirmation"
                placeholder="Confirm password">
        </div>

        <br>

        <button type="submit">
            Register
        </button>

    </form>

</body>
</html>