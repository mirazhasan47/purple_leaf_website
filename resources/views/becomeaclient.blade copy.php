<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Purple Leaf</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        /* Navbar CSS */
        .navbar {
            background-color: transparent !important;
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
        .navbar .dropdown-menu {
            background-color: rgba(111, 66, 193, 0.95);
            border: none;
            border-radius: 8px;
        }
        .navbar .dropdown-item {
            color: white !important;
            padding: 0.5rem 1rem;
        }
        .navbar .dropdown-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: #ffe1fa !important;
        }
        .navbar .dropdown-divider {
            border-color: rgba(255, 255, 255, 0.2);
        }
        @media (max-width: 991px) {
            .navbar .dropdown-menu {
                background-color: transparent;
                display: none;
            }
            .navbar .dropdown-menu.show {
                display: block;
            }
            .dropdown-toggle::after {
                content: "▼";
                margin-left: 0.5rem;
                font-size: 0.7rem;
            }
            .dropdown-toggle[aria-expanded="true"]::after {
                content: "▲";
            }
        }

        /* Contact Section CSS */
        .contact-section {
            background-color: #ffffff;
            color: #1a1a1a;
            padding: 100px 0;
        }
        .gradient-text {
            background: linear-gradient(90deg, #d27eff, #7c3aed);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .email-link {
            font-size: 1.1rem;
            color: #000;
            text-decoration: underline;
        }
        .contact-section a {
            color: #333;
            text-decoration: underline;
        }
        .contact-section a:hover {
            color: #7c3aed;
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"
                style="border: none; background: transparent;">
            <img src="{{ asset('menuIcon.png') }}" alt="Menu" style="width: 40px; height: 40px;">
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav me-3">
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#blog">Blog</a>
                </li>
            </ul>
            <a href="{{ route('becomeaclient') }}" class="btn btn-outline-light" style="border-radius: 100px;">Let's Talk</a>
        </div>
    </div>
</nav>

<!-- Contact / Get in touch Section -->
<section class="contact-section py-5">
  <div class="container" style="margin-top: 70px; margin-bottom: 70px; max-width: 968px;">
    <div class="row align-items-start">
      <!-- Left: Contact Info -->
      <div class="col-lg-6 mb-4">
        <h2 class="fw-bold gradient-text mb-3" style="text-align: left;">Get<br>in touch</h2>
        <p style="text-align: left;">
            <a href="mailto:contactpurpleleaf@gmail.com" class="email-link">contactpurpleleaf@gmail.com</a>
        </p>
        <p style="text-align: left;">
          <img src="https://img.icons8.com/color/24/000000/whatsapp--v1.png" alt="WhatsApp icon" />
          +880123456789
        </p>
      </div>

      <!-- Right: Links -->
      <div class="col-lg-6 d-flex gap-5" style="margin-top: 55px;">
        <div>
          <h5 class="fw-bold">Portfolio</h5>
          <ul class="list-unstyled">
            <li><a href="#">Dribbble</a></li>
            <li><a href="#">Behance</a></li>
            <li><a href="#">GitHub</a></li>
          </ul>
        </div>
        <div>
          <h5 class="fw-bold">Social media</h5>
          <ul class="list-unstyled">
            <li><a href="#">Linkedin</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Instagram</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer / Everything below -->
<section class="client-section text-white d-flex align-items-center" style="padding: 80px 0; background: radial-gradient(circle at bottom right, #5b21b6, #0f0c1e);">
  <div class="container text-center">
    <p class="text-uppercase text-muted small mb-4">Our Clients</p>
    <div class="d-flex flex-wrap justify-content-center gap-3">
      <img src="{{ asset('IconOne.png') }}" alt="Client 1" class="img-fluid" style="max-height: 60px;">
      <img src="{{ asset('our_clients_two.png') }}" alt="Client 2" class="img-fluid" style="max-height: 60px;">
      <img src="{{ asset('our_clients_three.png') }}" alt="Client 3" class="img-fluid" style="max-height: 60px;">
      <img src="{{ asset('our_clients_four.png') }}" alt="Client 4" class="img-fluid" style="max-height: 60px;">
      <img src="{{ asset('our_clients_five.png') }}" alt="Client 5" class="img-fluid" style="max-height: 60px;">
    </div>
  </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
