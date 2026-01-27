<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Purple Leaf</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
        }

        /* Navbar */
        .navbar {
            background-color: transparent;
            transition: background-color 0.4s ease;
        }
        .navbar.scrolled {
            background-color: #6f42c1 !important;
        }
        .navbar .nav-link {
            color: white !important;
            transition: color 0.3s ease;
        }
        .navbar .nav-link:hover {
            color: #ffe1fa !important;
        }

        /* Hero Section */
        .hero {
            height: 76.85vh;
            background: url('{{ asset("HeroNewOne.jpg") }}') no-repeat center center;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .container h1 {
            font-family: 'Lora', serif;
            font-weight: 700;
            font-style: italic;
            font-size: 72px;
            margin: 0;
            background: linear-gradient(90deg, #dc00ff, #ffe1fa, #ffffff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .btn-purple {
            background-color: #5f2eff;
            color: white;
            font-weight: 600;
            border-radius: 6px;
            padding: 12px 24px;
            transition: background 0.3s ease;
        }
        .btn-purple:hover {
            background-color: #4b22d8;
        }

        /* Client Section */
        .client-section {
            padding: 80px 0;
            background: radial-gradient(circle at bottom right, #5b21b6, #0f0c1e);
            color: white;
        }

        /* Contact Form */
        .contact-form-section .form-control {
            border-radius: 6px;
            padding: 10px 14px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        .contact-form-section .form-label {
            font-weight: 600;
            margin-bottom: 8px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('LogoOne.png') }}" alt="Purple Leaf Logo" style="max-width: 152px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <img src="{{ asset('menuIcon.png') }}" alt="Menu" style="width: 40px; height: 40px;">
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav me-3">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#work">Work</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#blog">Blog</a></li>
            </ul>
            <a href="#contact" class="btn btn-outline-light" style="border-radius: 100px;">Let's Talk</a>
        </div>
    </div>
</nav>

<!-- Client Section -->
<section class="client-section d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Text -->
            <div class="col-md-6">
                <h2 class="fw-bold mb-3">Become a client!</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel libero sit amet odio ullamcorper eleifend.</p>
            </div>

            <!-- Right Images -->
            <div class="col-md-6 d-flex justify-content-center gap-3">
                <img src="{{ asset('first_character.png') }}" alt="Character One" class="img-fluid" style="    max-width: 34vw;
    filter: none;
    transform: translate(9vw, 1px);">
                <img src="{{ asset('second_character.png') }}" alt="Character Two" class="img-fluid" style="max-width: 120px;">
                <img src="{{ asset('third_character.png') }}" alt="Character Three" class="img-fluid" style="max-width: 30vw;filter: none;transform: translate(-6vw, -10px);">
            </div>
        </div>
    </div>
</section>

<!-- Contact Form -->
<section class="contact-form-section py-5" id="contact">
    <div class="container">
        <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div class="row mb-4">
                <div class="col-md-6 mb-3">
                    <label for="fullName" class="form-label">Full Name</label>
                    <input type="text" name="fullName" id="fullName" class="form-control" placeholder="Type your answer here..." required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="businessName" class="form-label">Business Name</label>
                    <input type="text" name="businessName" id="businessName" class="form-control" placeholder="Type your answer here..." required>
                </div>
            </div>
            <div class="mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Type your answer here..." required>
            </div>
            <div class="mb-4">
                <label for="projectIdea" class="form-label">Share your project idea–</label>
                <textarea name="projectIdea" id="projectIdea" class="form-control" rows="4" placeholder="Type your idea here..." required></textarea>
            </div>
            <button type="submit" class="btn btn-purple w-100">Submit</button>
        </form>
    </div>
</section>


@if(session('success'))
<div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center p-4" style="border-radius: 16px;">
            <div class="modal-body">
                <img src="{{ asset('success-tick.png') }}" alt="Success"
                     class="mb-3" style="width: 80px;">

                <h4 class="fw-bold">Great!</h4>
                <p class="text-muted mb-4">
                    Your message was successfully sent.
                </p>

                <button type="button"
                        class="btn btn-purple px-5"
                        data-bs-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>
@endif

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function(){
    // Navbar scroll effect
    var navbar = document.querySelector('.navbar');
    var hero = document.querySelector('.hero');
    if(hero) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > hero.offsetHeight - 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }

    // Active link toggle
    var navLinks = document.querySelectorAll('.navbar .nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            navLinks.forEach(l => l.classList.remove('active'));
            this.classList.add('active');
        });
    });
});
</script>

@if(session('success'))
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var successModal = new bootstrap.Modal(
            document.getElementById('successModal')
        );
        successModal.show();
    });
</script>
@endif

</body>
</html>
