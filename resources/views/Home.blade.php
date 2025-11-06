<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!-- Bootstrap CSS (optional for styling) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        header {
            background-color: #0d6efd;
            color: white;
            padding: 15px 0;
        }
        header h1 {
            margin: 0;
            font-size: 24px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            font-weight: 500;
        }
        nav a:hover {
            text-decoration: underline;
        }
        footer {
            background-color: #212529;
            color: #ccc;
            padding: 10px 0;
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="container d-flex justify-content-between align-items-center">
            <h1>My Laravel Site</h1>
            <nav>
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/contact">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Main Section -->
    <section class="text-center py-5 bg-light">
        <div class="container">
            <h2>Welcome to My Laravel Website</h2>
            <p class="lead mt-3">This is a simple homepage created using Blade template and HTML.</p>
            <a href="/about" class="btn btn-primary mt-3">Learn More</a>
        </div>
    </section>

    <!-- Features -->
    <section class="container my-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-body text-center">
                        <h5>Fast Development</h5>
                        <p>Laravel makes building web applications faster and easier.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-body text-center">
                        <h5>Modern Design</h5>
                        <p>Blade templates let you create beautiful, reusable layouts easily.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-body text-center">
                        <h5>Easy to Customize</h5>
                        <p>Change colors, text, and sections to match your project style.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} My Laravel Website | All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
