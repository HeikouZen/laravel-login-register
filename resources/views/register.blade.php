<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            margin: 0;
            padding: 24px;
            display: grid;
            place-items: center;
            font-family: Arial, sans-serif;
            color: #172033;
            background: linear-gradient(135deg, #e8efff, #f7f9fc);
        }

        .register-card {
            width: 100%;
            max-width: 440px;
            padding: 38px;
            background: #fff;
            border: 1px solid #e7eaf0;
            border-radius: 16px;
            box-shadow: 0 18px 50px rgba(31, 48, 80, 0.12);
        }

        .eyebrow {
            margin: 0 0 8px;
            color: #2563eb;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 1.4px;
            text-transform: uppercase;
        }

        h1 {
            margin: 0;
            font-size: 30px;
        }

        .description {
            margin: 10px 0 28px;
            color: #667085;
            font-size: 15px;
            line-height: 1.5;
        }

        form {
            display: grid;
            gap: 18px;
        }

        .field {
            display: grid;
            gap: 8px;
        }

        label {
            color: #344054;
            font-size: 14px;
            font-weight: 600;
        }

        input {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #d0d5dd;
            border-radius: 8px;
            background: #fff;
            color: #172033;
            font: inherit;
        }

        input:focus {
            border-color: #2563eb;
            outline: 3px solid rgba(37, 99, 235, 0.15);
        }

        button {
            width: 100%;
            margin-top: 4px;
            padding: 13px 16px;
            border: 0;
            border-radius: 8px;
            background: #2563eb;
            color: #fff;
            font: inherit;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        button:hover {
            background: #1d4ed8;
        }

        .login-link {
            margin: 24px 0 0;
            color: #667085;
            font-size: 14px;
            text-align: center;
        }

        a {
            color: #2563eb;
            font-weight: 600;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .register-card {
                padding: 28px 22px;
            }
        }
    </style>
</head>
<body>
    <main class="register-card">
        <p class="eyebrow">Get started</p>
        <h1>Create your account</h1>
        <p class="description">Enter your details below to register.</p>

        <form action="/register" method="POST">
            @csrf

            <div class="field">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Your name" autocomplete="name" required>
            </div>

            <div class="field">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="you@example.com" autocomplete="email" required>
            </div>

            <div class="field">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Create a password" autocomplete="new-password" required>
            </div>

            <button type="submit">Create account</button>
        </form>

        <p class="login-link">Already have an account? <a href="/login">Log in</a></p>
    </main>
</body>
</html>
