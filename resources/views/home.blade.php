
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Homepage</title>
    <style>
        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            background: #f3f6fb;
            color: #1f2937;
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        header {
            padding: 64px 24px;
            background: linear-gradient(135deg, #172554, #2563eb);
            color: #fff;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: clamp(32px, 5vw, 48px);
        }

        header p {
            margin: 10px 0 0;
            color: #dbeafe;
        }

        nav {
            position: sticky;
            top: 0;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px 24px;
            padding: 14px 24px;
            background: #fff;
            box-shadow: 0 3px 12px rgba(15, 23, 42, 0.08);
        }

        nav a {
            color: #374151;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
        }

        nav a:hover {
            color: #2563eb;
        }

        nav form {
            margin: 0;
        }

        button {
            padding: 10px 16px;
            border: 0;
            border-radius: 7px;
            background: #2563eb;
            color: #fff;
            font: inherit;
            font-weight: 600;
            cursor: pointer;
        }

        button:hover {
            background: #1d4ed8;
        }

        nav button {
            padding: 8px 14px;
            background: #eff6ff;
            color: #1d4ed8;
        }

        nav button:hover {
            background: #dbeafe;
        }

        main {
            width: min(100% - 40px, 1000px);
            margin: 36px auto;
        }

        section {
            margin-bottom: 24px;
            padding: 28px;
            border: 1px solid #e5eaf2;
            border-radius: 12px;
            background: #fff;
            box-shadow: 0 8px 24px rgba(15, 23, 42, 0.04);
            scroll-margin-top: 85px;
        }

        section h2 {
            margin: 0 0 12px;
            color: #172554;
            font-size: 23px;
        }

        section p {
            color: #5b6472;
        }

        ul {
            margin-bottom: 0;
            padding-left: 22px;
            color: #4b5563;
        }

        li {
            margin: 6px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 8px;
            text-align: left;
        }

        th, td {
            padding: 12px 14px;
            border-bottom: 1px solid #e5e7eb;
        }

        th {
            background: #eff6ff;
            color: #1e3a8a;
        }

        tbody tr:last-child td {
            border-bottom: 0;
        }

        #contact form {
            display: grid;
            gap: 10px;
        }

        #contact input, #contact textarea {
            width: 100%;
            padding: 11px 12px;
            border: 1px solid #d1d5db;
            border-radius: 7px;
            font: inherit;
        }

        #contact input:focus, #contact textarea:focus {
            border-color: #2563eb;
            outline: 3px solid rgba(37, 99, 235, 0.14);
        }

        #contact textarea {
            min-height: 120px;
            resize: vertical;
        }

        .form-buttons {
            display: flex;
            gap: 10px;
            margin-top: 6px;
        }

        button[type="reset"] {
            background: #e5e7eb;
            color: #374151;
        }

        button[type="reset"]:hover {
            background: #d1d5db;
        }

        footer {
            padding: 20px;
            background: #172554;
            color: #dbeafe;
            text-align: center;
        }

        footer p {
            margin: 0;
        }

        @media (max-width: 600px) {
            header {
                padding: 48px 20px;
            }

            nav {
                gap: 12px 16px;
            }

            main {
                width: min(100% - 24px, 1000px);
                margin: 20px auto;
            }

            section {
                padding: 20px;
            }

            th, td {
                padding: 10px 8px;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>Welcome to My Homepage</h1>
        <p>This is a simple HTML homepage for testing.</p>
    </header>

    <nav>
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>

        <form action="/logout" method="POST" style="display: inline;">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </nav>

    <main>
        <section id="home">
            <h2>Home</h2>
            <p>Hello! Welcome to my website. This page is built using HTML only.</p>
            <button>Click Me</button>
        </section>

        <section id="about">
            <h2>About Us</h2>
            <p>This section contains information about the website.</p>
        </section>

        <section id="services">
            <h2>Our Services</h2>
            <ul>
                <li>Web Development</li>
                <li>Web Design</li>
                <li>HTML Testing</li>
            </ul>
        </section>

        <section>
            <h2>Sample Information</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>John</td>
                    <td>Active</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane</td>
                    <td>Inactive</td>
                </tr>
            </table>
        </section>

        <section id="contact">
            <h2>Contact Us</h2>

            <form>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">

                <label for="email">Email:</label>
                <input type="email" id="email" name="email">

                <label for="message">Message:</label>
                <textarea id="message" name="message"></textarea>

                <div class="form-buttons">
                    <button type="submit">Submit</button>
                    <button type="reset">Clear</button>
                </div>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 My Homepage. All rights reserved.</p>
    </footer>

</body>
</html>
