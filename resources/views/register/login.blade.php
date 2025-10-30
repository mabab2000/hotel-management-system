<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - The Kicukiro Heights</title>
  <style>
    /* ===== BASE STYLES ===== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(rgba(44, 62, 80, 0.9), rgba(44, 62, 80, 0.9)),
                  url('https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
      color: #333;
    }

    /* ===== LOGIN CONTAINER ===== */
    .login-container {
      background: rgba(255, 255, 255, 0.95);
      padding: 40px 35px;
      border-radius: 10px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
      width: 100%;
      max-width: 400px;
      text-align: center;
      animation: fadeIn 0.8s ease;
    }

    .login-logo {
      font-size: 1.8rem;
      font-weight: bold;
      color: #D4AF37;
      margin-bottom: 10px;
      letter-spacing: 1px;
    }

    .login-subtitle {
      color: #2C3E50;
      font-size: 1rem;
      margin-bottom: 25px;
    }

    h2 {
      color: #2C3E50;
      margin-bottom: 25px;
      font-weight: 600;
    }

    label {
      display: block;
      text-align: left;
      color: #2C3E50;
      font-weight: 500;
      margin-bottom: 6px;
    }

    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 10px 12px;
      border: 1px solid #ccc;
      border-radius: 6px;
      margin-bottom: 20px;
      font-size: 15px;
      transition: all 0.3s;
    }

    input[type="email"]:focus,
    input[type="password"]:focus {
      outline: none;
      border-color: #D4AF37;
      box-shadow: 0 0 5px rgba(212, 175, 55, 0.4);
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #D4AF37;
      color: #2C3E50;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: all 0.3s;
    }

    button:hover {
      background-color: #c9a227;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    .errors {
      background: rgba(255, 0, 0, 0.1);
      border-left: 4px solid red;
      color: #a00;
      padding: 10px;
      margin-bottom: 20px;
      border-radius: 4px;
      text-align: left;
      font-size: 14px;
    }

    ul {
      margin: 0;
      padding-left: 20px;
    }

    /* ===== LINKS ===== */
    .extra-links {
      margin-top: 15px;
      font-size: 14px;
    }

    .extra-links a {
      color: #2C3E50;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s;
    }

    .extra-links a:hover {
      color: #D4AF37;
    }

    /* ===== ANIMATIONS ===== */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(10px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 480px) {
      .login-container {
        padding: 30px 25px;
      }

      h2 {
        font-size: 1.4rem;
      }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <div class="login-logo">THE KICUKIRO HEIGHTS</div>
    <div class="login-subtitle">Luxury Hotel Member Login</div>

    <h2>Sign In</h2>

    @if ($errors->any())
      <div class="errors">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
      @csrf

      <label for="email">Email Address</label>
      <input type="email" name="email" value="{{ old('email') }}" required>

      <label for="password">Password</label>
      <input type="password" name="password" required>

      <button type="submit">Login</button>

      <div class="extra-links">
        <p>Don't have an account? <a href="/register">Register here</a></p>
      </div>
    </form>
  </div>
</body>
</html>
