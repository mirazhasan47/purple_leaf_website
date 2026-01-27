<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Purple Leaf</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

</head>

<body>

    <style>
        /* --- Global & Typography --- */
        h1 {
            font-size: 50px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        h2 {
            font-size: 28px;
            font-weight: bold;
        }

        .btn {
            font-size: 16px;
            padding: 12px 25px;
            margin: 5px;
            border-radius: 50px;
        }

        .btn-secondary {
            background-color: transparent;
            border: 2px solid #fff;
            color: white;
        }

        .btn-orange {
            background-color: #ff6a00;
            color: white;
            font-weight: 500;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        .btn-orange:hover {
            background-color: #e95d00;
            color: white;
        }

        .btn-primary {
            background-color: white;
            border-color: #ff6f47;
            color: #ff6f47;
            font-weight: bold;
            text-transform: uppercase;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: white;
            border-color: #ff6f47;
            color: #ff6f47;
            font-weight: bold;
            text-transform: uppercase;
            width: 100%;
        }

        .btn-link {
            font-weight: bold;
            font-size: 16px;
        }

        /* --- Navbar & Utilities --- */
        .navbar {
            background-color: #343a40;
            padding: 10px 0;
            font-family: 'Arial', sans-serif;
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-nav {
            display: flex;
            align-items: center;
            list-style: none;
            margin: 0;
            padding: 0;
            flex-grow: 1;
            justify-content: space-between;
        }

        .nav-item {
            margin-right: 20px;
        }

        .nav-link {
            color: #fff;
            font-size: 12px;
            text-transform: uppercase;
            font-weight: 500;
            padding: 10px;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: orange;
        }

        .donate-btn {
            background-color: transparent;
            color: orange;
            border: 1px solid orange;
            padding: 7px 20px;
            font-weight: 500;
            text-transform: uppercase;
            border-radius: 5px;
            cursor: pointer;
            font-size: 10px;
        }

        .donate-btn:hover {
            background-color: orange;
            color: #fff;
        }

        .profile-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .logo {
            max-width: 152px;
        }

        .desktop-logo {
            display: flex;
        }

        .mobile-logo,
        .drawer-items {
            display: none;
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        .language-switcher {
            margin-left: 20px;
            display: flex;
            align-items: center;
            position: relative;
            /* Essential for dropdown positioning */
        }

        .lang-btn {
            color: #fff;
            font-size: 14px;
            border: none;
            background: transparent;
            font-weight: 500;
            padding: 5px 10px;
            text-transform: uppercase;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .lang-btn:hover {
            color: orange;
        }

        .dropdown-icon {
            font-size: 10px;
            margin-left: 5px;
        }

        .lang-dropdown {
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #343a40;
            border: 1px solid #fff;
            display: none;
            flex-direction: column;
            width: 100px;
            padding: 5px 0;
            z-index: 10;
        }

        .lang-dropdown button {
            color: #fff;
            padding: 8px;
            text-align: center;
            border: none;
            background: transparent;
        }

        .language-switcher:hover .lang-dropdown {
            display: flex;
        }

        /* --- Toggle Switch --- */
        .switch {
            position: relative;
            display: inline-block;
            margin: 0 5px;
        }

        .switch>span {
            position: absolute;
            top: 4px;
            pointer-events: none;
            font-family: 'Helvetica', Arial, sans-serif;
            font-weight: bold;
            font-size: 10px;
            text-transform: uppercase;
            text-shadow: 0 1px 0 rgba(0, 0, 0, .06);
            width: 50%;
            text-align: center;
        }

        .switch>span.on {
            left: 0;
            padding-left: 2px;
            color: #ffffffff;
        }

        .switch>span.off {
            right: 0;
            padding-right: 4px;
            color: #fff;
        }

        input.check-toggle-round-flat:checked~.off {
            color: #ffffffff;
        }

        input.check-toggle-round-flat:checked~.on {
            color: #fff;
        }

        .check-toggle {
            position: absolute;
            margin-left: -9999px;
            visibility: hidden;
        }

        .check-toggle+label {
            display: block;
            position: relative;
            cursor: pointer;
            outline: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        input.check-toggle-round-flat+label {
            padding: 2px;
            width: 70px;
            height: 22px;
            background-color: white;
            border-radius: 60px;
            position: relative;
        }

        input.check-toggle-round-flat+label:before,
        input.check-toggle-round-flat+label:after {
            display: block;
            position: absolute;
            content: "";
        }

        input.check-toggle-round-flat+label:before {
            top: 2px;
            left: 2px;
            bottom: 2px;
            right: 2px;
            background-color: #A9A9A9CC;
            border-radius: 60px;
        }

        input.check-toggle-round-flat+label:after {
            top: 1px;
            left: 1px;
            bottom: 1px;
            width: 50%;
            background-color: #0000004d;
            border-top-left-radius: 52px;
            border-bottom-left-radius: 52px;
            transition: margin 0.2s, border-radius 0.2s;
        }

        input.check-toggle-round-flat:checked+label:after {
            margin-left: 30px;
            border-top-right-radius: 52px;
            border-bottom-right-radius: 52px;
            border-top-left-radius: 0px;
            border-bottom-left-radius: 0px;
        }

        /* --- Hero Section & Backgrounds --- */
        .hero {
            height: 450px;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('about_us.png') }}') no-repeat center center;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 66px;
        }

        .hero .content {
            width: 100%;
            color: white;
            text-align: left;
        }

        .blog-bg {
            position: relative;
            height: 107.85vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 66px;
            overflow: hidden;
        }

        .blog-bg::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('{{ asset('blogs_background.png') }}') no-repeat center center;
            background-size: cover;
            filter: blur(0px);
            z-index: 1;
        }

        .blog-bg::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #FFD1B0CC;
            z-index: 2;
        }

        .blog-bg>* {
            position: relative;
            z-index: 3;
        }

        /* --- Donation Form --- */
        .donation-container {
            background-color: #FDF4DA;
            border-radius: 10px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 1279px;
            margin: 0px auto !important;
            text-align: center;
            position: relative;
            top: -40px;
        }

        .donation-container h2 {
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 30px;
            color: #333;
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .form-group {
            flex: 1;
            min-width: 100%;
            margin-right: 0;
            margin-bottom: 20px;
        }

        .form-control {
            font-size: 14px;
            padding: 7px;
            width: 100%;
            border-radius: 0px;
            border: 1px solid #ccc;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #ff6f61;
        }

        .btn-donate {
            background-color: #ff6f61;
            color: white;
            border-radius: 50px;
            padding: 15px 30px;
            font-size: 18px;
            width: 100%;
            border: none;
            cursor: pointer;
        }

        .btn-donate:hover {
            background-color: #e55a4d;
        }

        .note {
            margin-top: 20px;
            font-size: 14px;
            color: #ff6f61;
        }

        .note a {
            color: #ff6f61;
            text-decoration: none;
        }

        .form-text {
            font-size: 13px;
            color: #ff6f61;
            margin-top: 5px;
        }

        /* --- Cards & Content --- */
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-weight: bold;
            font-size: 18px;
        }

        .card-body {
            text-align: center;
        }

        .card-text {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 15px;
        }

        .card img {
            border-radius: 10px;
        }

        .photo-box img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 15px;
        }

        /* --- Opinion Slider --- */
        .opinion-section {
            position: relative;
            overflow: hidden;
        }

        .slider-container {
            position: relative;
            overflow: hidden;
            height: 500px;
        }

        .slider-track {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .opinion-card {
            flex: 0 0 100%;
            padding: 1rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .opinion-card:hover {
            transform: translateY(-5px);
        }

        .opinion-card img {
            height: 180px;
            object-fit: cover;
            width: 100%;
            border-radius: 8px;
        }

        .slider-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.8);
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            color: #333;
            z-index: 10;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            padding-bottom: 8px;
        }

        .slider-arrow:hover {
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .slider-arrow.prev {
            left: 10px;
        }

        .slider-arrow.next {
            right: 10px;
        }

        .slider-dots {
            display: flex;
            justify-content: center;
            margin-top: 1.5rem;
        }

        .slider-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #ddd;
            margin: 0 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .slider-dot.active {
            background: #0d6efd;
        }

        /* --- CSR Section (Partner Logos/Images) --- */
        .csr-section {
            padding: 60px 0;
            background-color: #f8f9fa;
        }

        .csr-title {
            text-align: center;
            margin-bottom: 40px;
            color: #333;
            font-weight: 700;
        }

        .csr-slider {
            margin: 0 auto;
            max-width: 1200px;
        }

        .image-wrapper {
            padding: 15px;
        }

        .csr-image {
            width: 100%;
            height: 120px;
            object-fit: contain;
            border-radius: 8px;
            background-color: white;
            padding: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .csr-image:hover {
            transform: scale(1.05);
        }

        /* --- Footer --- */
        .footer {
            background: linear-gradient(to bottom, #fdf6f2, #ffe2cb);
            font-family: 'Segoe UI', sans-serif;
        }

        .footer h6 {
            font-weight: 700;
            margin-bottom: 20px;
        }

        .footer p,
        .footer a {
            color: #333;
            font-size: 14px;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .social-icons a {
            font-size: 20px;
            margin-right: 15px;
            color: #000;
        }

        .footer-form input {
            font-size: 14px;
            border-radius: 6px;
        }

        .footer-form .btn {
            background-color: #ff6600;
            color: #fff;
            border-radius: 6px;
            width: 100%;
        }

        .footer-bottom {
            border-top: 1px solid #ccc;
            margin-top: 40px;
            padding-top: 20px;
            text-align: center;
            font-size: 14px;
            color: #555;
        }

        /* --- Modal Styles --- */
        .modal-custom {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: auto;
        }

        .modal-img {
            max-width: 90%;
            max-height: 80%;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
            object-fit: contain;
        }

        .modal-close {
            position: absolute;
            top: 20px;
            right: 30px;
            color: white;
            font-size: 32px;
            font-weight: bold;
            cursor: pointer;
            z-index: 10000;
        }

        .modal-close:hover {
            color: orange;
        }

        /* --- Responsive Adjustments --- */
        @media (max-width: 991px) {
            .navbar-nav {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar-nav .nav-item {
                margin-right: 0;
                margin-bottom: 10px;
            }

            .desktop-logo {
                display: none;
            }

            .mobile-logo {
                display: flex;
            }

            .drawer-items {
                display: flex;
                align-items: center;
                justify-content: space-between;
                width: 100%;
                padding: 15px 0;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
                margin-bottom: 10px;
            }

            .navbar-collapse {
                background-color: #343a40;
                border-radius: 10px;
                padding: 15px;
                margin-top: 10px;
            }

            .nav-link {
                display: block;
                padding: 10px;
                color: white;
            }

            .navbar-extra {
                margin-top: 10px;
            }

            .donate-btn {
                font-size: 12px;
                padding: 10px 25px;
            }

            .hero .content {
                width: 100%;
            }
        }

        @media (min-width: 992px) {
            .hero .content {
                width: 40%;
            }

            .form-group {
                min-width: 22%;
                margin-right: 2%;
            }

            .form-group:last-child {
                margin-right: 0;
            }

            .btn-donate {
                width: 100%;
                padding: 7px;
                font-size: 16px;
                margin-top: 18%;
            }
        }

        @media (min-width: 768px) {
            .form-group {
                min-width: 48%;
                margin-right: 2%;
            }

            .form-group:last-child {
                margin-right: 0;
            }

            .opinion-card {
                flex: 0 0 33.333%;
            }

            .slick-prev {
                left: -50px;
            }

            .slick-next {
                right: -50px;
            }
        }

        @media (min-width: 576px) {
            .opinion-card {
                flex: 0 0 50%;
            }
        }

        @media (max-width: 767px) {

            .footer .col-md-2,
            .footer .col-md-3,
            .footer .col-md-4,
            .footer .col-md-5 {
                margin-bottom: 30px;
            }

            .slick-prev {
                left: -20px;
            }

            .slick-next {
                right: -20px;
            }

            .csr-image {
                height: 100px;
            }
        }

        @media (max-width: 576px) {
            .join-box h5 {
                font-size: 1rem;
            }
        }

        @media (min-width: 992px) {
            .opinion-card {
                flex: 0 0 25%;
            }
        }


        .row {
            margin-top: 50px !important;
        }




        .video-description {
            font-size: 14px;
            color: #555;
        }

        .donation-form {
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .bank-details {
            background-color: #f0f0f0;
            border-radius: 8px;
        }

        .bank-details h5 {
            font-size: 18px;
            font-weight: bold;
        }

        .bank-details p {
            margin: 0;
            font-size: 14px;
        }

        button.btn {
            width: 100%;
            padding: 10px;
        }

        select.form-select {
            margin-bottom: 15px;
        }

        .alert-danger {
            font-size: 14px;
            background-color: #f8d7da;
            color: #721c24;
            border-radius: 8px;
            padding: 15px;
        }

        .alert-danger h5 {
            margin-bottom: 10px;
        }

        .alert-danger ul {
            padding-left: 20px;
            list-style-type: disc;
        }

        .text-center {
            text-align: center;
        }

        a {
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }



        .text-section {
            font-size: 14px;
            line-height: 1.6;
            color: #555;
        }

        .text-list {
            list-style-type: disc;
            margin-left: 20px;
        }

        .text-list li {
            margin-bottom: 5px;
        }

        .text-section p {
            margin-bottom: 15px;
        }


        .card {
            border-radius: 15px;
        }

        .card-header {
            background-color: #fcf4d9;
            border-radius: 15px 15px 0 0;
        }

        .card-body {
            background-color: #ffffff;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .btn-group .btn {
            width: 100%;
        }

        .btn-outline-primary {
            background-color: white;
            border-color: black;
            color: black !important;
            color: white;
        }

        .btn-outline-primary:hover {
            background-color: #FE6F0F;
            color: white;
        }

        .btn-warning {
            background-color: #f8c600;
            border-color: #f8c600;
        }

        .btn-warning:hover {
            background-color: #e6b300;
            border-color: #e6b300;
        }

        .form-check-inline {
            margin-right: 15px;
        }

        .form-check-label {
            font-size: 1rem;
        }


        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 1.5rem;
        }

        h5 {
            font-size: 1.2rem;
            font-weight: bold;
        }

        p {
            font-size: 1rem;
        }

        .fw-normal {
            font-weight: normal;
        }

        img {
            border-radius: 50%;
            width: 50px;
            height: 50px;
            object-fit: cover;
        }


        .textleft {
            text-align: left !important;
        }

        .payment-icon {
            width: 24px;
            height: 24px;
            margin-left: 6px;
            object-fit: contain;
        }




        .goals-section {
            background-color: #000;
            color: #bdbdbd;
        }

        .section-title {
            color: #666;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .goals-tabs .tab-item {
            color: #555;
            font-size: 18px;
            cursor: pointer;
            padding-bottom: 10px;
            position: relative;
        }

        .goals-tabs .tab-item.active {
            color: #ff8c00;
            font-weight: 600;
        }

        .goals-tabs .tab-item.active::after {
            content: "";
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: #ff8c00;
        }

        .tab-icon {
            margin-right: 6px;
        }

        .goals-list {
            list-style: none;
            padding-left: 0;
        }

        .goals-list li {
            position: relative;
            padding-left: 40px;
            margin-bottom: 18px;
            line-height: 1.6;
        }

        .goals-list li::before {
            content: "✓";
            position: absolute;
            left: 0;
            top: 0;
            width: 26px;
            height: 26px;
            background-color: #ff8c00;
            color: #000;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }






        .goals-section {
  background-color: #000;
  color: #bdbdbd;
}

.section-title {
  color: #666;
  font-weight: 600;
}

.goals-tabs .tab-item {
  color: #555;
  font-size: 18px;
  cursor: pointer;
  padding-bottom: 10px;
  position: relative;
}

.goals-tabs .tab-item.active {
  color: #ff8c00;
  font-weight: 600;
}

.goals-tabs .tab-item.active::after {
  content: "";
  position: absolute;
  bottom: -5px;
  left: 0;
  width: 100%;
  height: 3px;
  background-color: #ff8c00;
}

.goals-list {
  list-style: none;
  padding-left: 0;
}

.goals-list li {
  position: relative;
  padding-left: 40px;
  margin-bottom: 18px;
}

.goals-list li::before {
  content: "✓";
  position: absolute;
  left: 0;
  width: 26px;
  height: 26px;
  background-color: #ff8c00;
  color: #000;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bold;
}

/* Tab content */
.tab-content {
  display: none;
}

.tab-content.active {
  display: block;
}


.no-results-section {
  min-height: 60vh;
  display: flex;
  align-items: center;
  background-color: #ffffff;
}

.no-results-img {
  max-width: 280px;
  opacity: 0.9;
}

.no-results-title {
  font-weight: 600;
  color: #6c757d;
}

.no-results-text {
  font-size: 14px;
  color: #9aa0a6;
}



    </style>

    <!-- Header / Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <!-- Mobile Logo on the Left -->
            <a class="navbar-brand mobile-logo" href="#">
                <img src="{{ asset('logo_lgf.png') }}" alt="Purple Leaf Logo" class="logo">
            </a>

            <!-- Left: Profile Icon + Language Switch (visible on desktop) -->
            <div class="d-flex align-items-center d-none d-lg-flex">
                <a class="navbar-brand me-2" href="#">
                    <img src="{{ asset('profile_lgf.png') }}" alt="Profile" class="profile-icon">
                </a>
                <div class="switch">
                    <input id="language-toggle" class="check-toggle check-toggle-round-flat" type="checkbox">
                    <label for="language-toggle"></label>
                    <span class="on">BN</span>
                    <span class="off">EN</span>
                </div>
            </div>

            <!-- Toggler Button (for mobile) -->
            <button class="navbar-toggler text-white border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <i class="bi bi-list" style="font-size: 1.8rem; color: orange;"></i>
            </button>

            <!-- Collapsible Navbar Content -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Profile and Language in Drawer for Mobile -->
                <div class="drawer-items">
                    <a class="navbar-brand me-2" href="#">
                        <img src="{{ asset('profile_lgf.png') }}" alt="Profile" class="profile-icon">
                    </a>
                    <div class="switch">
                        <input id="language-toggle-mobile" class="check-toggle check-toggle-round-flat" type="checkbox">
                        <label for="language-toggle-mobile"></label>
                        <span class="on">BN</span>
                        <span class="off">EN</span>
                    </div>
                </div>

                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#activities">Activities</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>

                    <!-- Centered Logo (Desktop) -->
                    <li class="nav-item desktop-logo">
                        <a class="navbar-brand" href="#">
                            <img src="{{ asset('logo_lgf.png') }}" alt="Purple Leaf Logo" class="logo">
                        </a>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="#connect">Connect With Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#blogs">Blogs</a></li>
                    <li class="nav-item"><a class="nav-link" href="#news">News & Stories</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>

                <!-- Right: Donate Button -->
                <div class="navbar-extra text-center mt-3 mt-lg-0">
                    <button class="btn donate-btn">Donate</button>
                </div>
            </div>
        </div>
    </nav>



<section class="no-results-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 text-center">
        
        <img 
          src="{{ asset('no_result_found.png') }}" 
          alt="No Results Found" 
          class="no-results-img img-fluid mb-4"
          style="    width: 100%;
    margin-top: 53px;"
        >

        <h5 class="no-results-title">No Results Found</h5>
        <p class="no-results-text">
          Try adjusting your search or filter to find what you’re looking for.
        </p>

      </div>
    </div>
  </div>
</section>




    <footer class="footer">
        <div class="container footer-container">
            <div class="row text-start">

                <!-- Logo & Description -->
                <div class="col-md-3">
                    <img src="{{ asset('lgf-footer-logo.png') }}" alt="LGF Logo">
                    <p class="mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                    </p>
                    <div class="social-icons mt-3">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Menu Links -->
                <div class="col-md-2">
                    <h6>Menu</h6>
                    <p><a href="#">About Us</a></p>
                    <p><a href="#">Projects</a></p>
                    <p><a href="#">Blogs</a></p>
                    <p><a href="#">Gallery</a></p>
                </div>

                <!-- Connect Links -->
                <div class="col-md-2">
                    <h6>Connect</h6>
                    <p><a href="#">Regular Doner</a></p>
                    <p><a href="#">Lifetime Doner</a></p>
                    <p><a href="#">Volunteer</a></p>
                    <p><a href="#">Career</a></p>
                </div>

                <!-- Other Links -->
                <div class="col-md-2">
                    <h6>Others</h6>
                    <p><a href="#">Contact</a></p>
                    <p><a href="#">Terms of Conditions</a></p>
                    <p><a href="#">Privacy Policy</a></p>
                </div>

                <!-- Newsletter Form -->
                <div class="col-md-3">
                    <h6>Subscribe E-newsletter</h6>
                    <form class="footer-form">
                        <div class="mb-2">
                            <input type="text" class="form-control" placeholder="Write Your Name">
                        </div>
                        <div class="mb-2">
                            <input type="email" class="form-control" placeholder="example@gmail.com">
                        </div>
                        <div class="mb-2">
                            <input type="text" class="form-control" placeholder="Type mobile/email">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn">Donate</button>
                        </div>
                    </form>
                </div>

            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <p>Copyright © 2025 Let’s Go-on Foundation - All rights reserved.</p>
            </div>

            <!-- Silhouettes Background -->
            <div class="footer-silhouettes"></div>
        </div>
        <div class="row">
            <img src="{{ asset('footer-background.png') }}" alt="Footer image" class="footer-image">
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</body>

</html>

    <script>
  const tabs = document.querySelectorAll(".tab-item");
  const contents = document.querySelectorAll(".tab-content");

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      // Remove active from all tabs
      tabs.forEach(t => t.classList.remove("active"));
      contents.forEach(c => c.classList.remove("active"));

      // Activate clicked tab
      tab.classList.add("active");
      document.getElementById(tab.dataset.tab).classList.add("active");
    });
  });
</script>
