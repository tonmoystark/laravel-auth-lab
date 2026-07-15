<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h1>Login</h1>

    <form action="{{ route('login.store') }}" method="POST">
        @csrf

        <div>
            <label>Email</label><br>
            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="Enter your email">

            @error('email')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label>Password</label><br>
            <input
                type="password"
                name="password"
                placeholder="Enter your password">

            @error('password')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <button type="submit">
            Login
        </button>
    </form>

</body>
</html>