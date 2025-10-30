<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | The Kicukiro Heights</title>
    <style>
        /* ===== BASE STYLES ===== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: #333;
        }

        header {
            background-color: #2C3E50;
            color: white;
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .container {
            width: 90%;
            max-width: 600px;
            margin: 40px auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            padding: 2.5rem;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            font-size: 1.6rem;
            font-weight: bold;
            color: #D4AF37;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            margin-left: 1.5rem;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #D4AF37;
        }

        h2 {
            text-align: center;
            color: #2C3E50;
            margin-bottom: 1.5rem;
        }

        form label {
            display: block;
            font-weight: bold;
            color: #2C3E50;
            margin-top: 1rem;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 0.8rem;
            margin-top: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        input:focus {
            outline: none;
            border-color: #D4AF37;
            box-shadow: 0 0 5px rgba(212, 175, 55, 0.5);
        }

        button {
            width: 100%;
            background: #D4AF37;
            color: #2C3E50;
            padding: 0.9rem;
            margin-top: 1.8rem;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            font-size: 1rem;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #c9a227;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .success {
            color: green;
            text-align: center;
            margin-bottom: 1rem;
            font-weight: bold;
        }

        .error-list {
            color: red;
            list-style-type: none;
            margin: 10px 0;
            padding: 0;
        }

        .login-link {
            text-align: center;
            margin-top: 1rem;
        }

        .login-link a {
            color: #2C3E50;
            text-decoration: none;
            font-weight: bold;
        }

        .login-link a:hover {
            color: #D4AF37;
        }

        footer {
            background: #1a252f;
            color: white;
            text-align: center;
            padding: 1rem 0;
            margin-top: 3rem;
        }

        footer p {
            color: #aaa;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <!-- ===== HEADER ===== -->
    <header>
        <nav>
            <div class="logo">THE KICUKIRO HEIGHTS</div>
            <div class="nav-links">
                <a href="/welcome">Home</a>
                <a href="#rooms">Rooms</a>
                <a href="/services">Services</a>
                <a href="#facilities">Facilities</a>
                <a href="/book">Book Now</a>
            </div>
        </nav>
    </header>

    <!-- ===== REGISTER FORM ===== -->
    <div class="container">
        <h2>Create an Account</h2>

        @if(session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif

        @if ($errors->any())
            <ul class="error-list">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="/register">
            @csrf
            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name') }}" required>

            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email') }}" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <button type="submit">Register</button>
        </form>

        <div class="login-link">
            <p>Already have an account? <a href="/login">Log in</a></p>
        </div>
    </div>

    <!-- ===== FOOTER ===== -->
    <footer>
        <p>&copy; {{ date('Y') }} The Kicukiro Heights. All Rights Reserved.</p>
    </footer>

</body>
</html>
