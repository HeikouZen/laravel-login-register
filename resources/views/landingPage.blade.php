<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f7fb;
            color: #1f2937;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        header {
            background: #0f172a;
            color: #fff;
            padding: 20px 0;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .nav-links {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            font-size: 14px;
        }

        .nav-links .btn {
            background: #2563eb;
            padding: 10px 18px;
            border-radius: 6px;
        }

        .hero {
            background: linear-gradient(135deg, #dbeafe, #eff6ff);
            padding: 80px 0;
        }

        .hero-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
        }

        .hero-text {
            flex: 1;
        }

        .hero-text h1 {
            font-size: 52px;
            margin: 0 0 20px;
            line-height: 1.1;
        }

        .hero-text p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 30px;
            color: #374151;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
        }

        .btn-primary, .btn-secondary {
            display: inline-block;
            text-decoration: none;
            padding: 14px 24px;
            border-radius: 8px;
            font-weight: bold;
        }

        .btn-primary {
            background: #2563eb;
            color: #fff;
        }

        .btn-secondary {
            background: #fff;
            color: #111827;
            border: 1px solid #d1d5db;
        }

        .hero-card {
            flex: 1;
            background: #fff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        }

        .hero-card .box {
            background: #eff6ff;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 15px;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 40px;
        }

        .stat {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.04);
        }

        .stat h3 {
            margin: 0 0 10px;
            font-size: 30px;
            color: #2563eb;
        }

        .stat p {
            margin: 0;
            color: #4b5563;
        }

        @media (max-width: 768px) {
            .hero-content {
                flex-direction: column;
                text-align: center;
            }

            .nav-links {
                display: none;
            }

            .hero-text h1 {
                font-size: 38px;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .hero-buttons {
                justify-content: center;
                flex-wrap: wrap;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">Miyekii Corp.</div>
                <div class="nav-links">
                    <a href="/login">Login</a>
                    <a href="/register" class="btn">Register</a>
                </div>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container hero-content">
            <div class="hero-text">
                <h1>Build smarter with confidence.</h1>
                <p>
                    Grow your business faster with tools designed to simplify workflows,
                    improve productivity, and turn ideas into action.
                </p>
                <div class="hero-buttons">
                    <a href="/login" class="btn-primary">Login</a>
                    <a href="/register" class="btn-secondary">Register</a>
                </div>
            </div>

            <div class="hero-card">
                <div class="box">
                    <strong>Sales Growth</strong>
                    <p>+48% this quarter</p>
                </div>
                <div class="box">
                    <strong>Customer Reach</strong>
                    <p>12.4k active users</p>
                </div>
                <div class="box">
                    <strong>Efficiency</strong>
                    <p>3x faster process</p>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="stats">
            <div class="stat">
                <h3>24k+</h3>
                <p>Happy Customers</p>
            </div>
            <div class="stat">
                <h3>98%</h3>
                <p>Customer Satisfaction</p>
            </div>
            <div class="stat">
                <h3>4.9/5</h3>
                <p>Average Rating</p>
            </div>
        </div>
    </div>
</body>
</html>
