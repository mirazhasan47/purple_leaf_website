<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KARIGHOR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #fff;
            text-align: center;
            padding: 80px 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        }

        .header img {
            max-width: 150px;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #333;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
        }

        .light-bg {
            background-color: #f6f2d7;
            padding: 50px 20px;
            border-radius: 10px;
        }

        .card-container {
            margin-top: 40px;
        }

        .card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            padding: 20px;
        }

        .card img {
            width: 100%;
            border-radius: 10px;
        }

        .download-btn {
            background-color: #9b57f5;
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            border: none;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .download-btn:hover {
            background-color: #8a4dd5;
            transform: translateY(-2px);
        }

        footer {
            background-color: #f1f1f1;
            padding: 40px 0;
            text-align: center;
        }

        footer h3 {
            font-weight: 700;
            margin-bottom: 20px;
        }

        footer p {
            font-size: 1rem;
            color: #666;
        }

        footer .social-links a {
            margin: 0 10px;
            color: #333;
            font-size: 1.25rem;
            transition: color 0.3s ease;
        }

        footer .social-links a:hover {
            color: #9b57f5;
        }

        .mobile-app img {
            width: 100%;
            max-width: 350px;
            margin: 10px 0;
        }

        .mobile-app-container {
            text-align: center;
            padding: 30px;
        }

        .container ul {
            list-style-type: none;
            padding-left: 0;
        }

        .container ul li {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .container a {
            color: #333;
            text-decoration: none;
            font-weight: 500;
        }

        .container a:hover {
            color: #9b57f5;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <img src="https://via.placeholder.com/150" alt="Logo">
        <h1>KARIGHOR</h1>
    </header>

    <!-- The Problem Section -->
    <section class="container my-5">
        <h2 class="section-title">The Problem</h2>
        <p>Our goal is to tackle the issue of lack of access to the proper tools for artisans and creators who are seeking to improve their skill development and increase their network within their industry.</p>
    </section>

    <!-- Objectives Section -->
    <section class="container my-5 light-bg">
        <h2 class="section-title">Objectives</h2>
        <ul>
            <li>Facilitate better connection between artisans and their industry.</li>
            <li>Provide resources and tools for skill development.</li>
            <li>Help artisans improve their reach and reputation in their community.</li>
        </ul>
    </section>

    <!-- Research Section -->
    <section class="container my-5">
        <h2 class="section-title">Research</h2>
        <p>We gathered insights from different creators and artisans to identify their main pain points and the specific tools they need to succeed in their field.</p>
        <div class="card-container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" alt="Research Image 1">
                        <p>Research Insights 1</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" alt="Research Image 2">
                        <p>Research Insights 2</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x200" alt="Research Image 3">
                        <p>Research Insights 3</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mobile App Design Section -->
    <section class="container my-5">
        <h2 class="section-title">Mobile App Design</h2>
        <div class="mobile-app-container">
            <img src="https://via.placeholder.com/350x650" alt="Mobile App Design">
        </div>
    </section>

    <!-- Web App Design Section -->
    <section class="container my-5">
        <h2 class="section-title">Web App Design</h2>
        <div class="mobile-app-container">
            <img src="https://via.placeholder.com/800x500" alt="Web App Design">
        </div>
    </section>

    <!-- Download PDF Button Section -->
    <section class="container my-5 text-center">
        <a href="#" class="download-btn">Download PDF</a>
    </section>

    <!-- Footer Section -->
    <footer>
        <h3>Get in touch</h3>
        <p>Email: contact@karighor.com | Phone: +1234567890</p>
        <div class="social-links">
            <a href="#">Portfolio</a>
            <a href="#">Social Media</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
