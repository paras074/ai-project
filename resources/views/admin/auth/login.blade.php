<!-- resources/views/admin/auth/login.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f0f0; /* Fallback color */
            background: linear-gradient(90deg, rgba(66,185,131,1) 0%, rgba(43,166,125,1) 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            max-width: 90%;
            text-align: center;
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .login-container .form-control {
            margin-bottom: 10px;
            border-radius: 4px;
        }
        .login-container .btn-login {
            background-color: #42b983;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s;
            width: 100%;
        }
        .login-container .btn-login:hover {
            background-color: #2ba67d;
        }
        .login-container .error-message {
            color: red;
            margin-top: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="login-container bg-white p-4 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Admin Login</h2>

        @if ($errors->any())
            <div class="error-message text-red-500 text-left mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                       class="form-control">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password"
                       class="form-control">
            </div>

            <button type="submit" class="btn btn-login">Login</button>
        </form>
    </div>

    <!-- Bootstrap JS (Optional for Bootstrap features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
