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
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                url('{{ asset('our-activities-bg.jpg') }}') no-repeat center center;
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



        .hero {
            padding: 60px 20px;
        }

        .hero-container {
            max-width: 1200px;
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            align-items: center;
        }

        /* TEXT */
        .hero-text {
            color: #fff;
        }

        .hero-text h1 {
            font-size: 40px;
            margin-bottom: 20px;
        }

        .hero-text p {
            color: #ccc;
            line-height: 1.6;
        }

        /* IMAGE GRID */
        .hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 200px 140px;
            /* 🔥 CONTROLS IMAGE SIZE */
            gap: 12px;
            max-width: 100%;
        }

        .hero-grid img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 6px;
        }

        /* GRID POSITIONS */
        .img-top {
            grid-column: 1 / 3;
            grid-row: 1 / 2;
        }

        .img-bottom-left {
            grid-column: 1 / 2;
            grid-row: 2 / 3;
        }

        .img-bottom-right {
            grid-column: 2 / 3;
            grid-row: 2 / 3;
        }



        @media (max-width: 768px) {
            .hero-container {
                grid-template-columns: 1fr;
            }

            .hero-text {
                text-align: center;
            }

            .hero-grid {
                grid-template-columns: 1fr;
                grid-template-rows: 180px 140px 140px;
            }

            .img-top {
                grid-column: 1;
            }
        }


        .project-card {
            background-color: #fff4ec;
            border-radius: 18px;
            padding: 22px 26px;
        }

        .project-title {
            font-weight: 600;
            margin-bottom: 16px;
            color: #222;
        }

        .project-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .project-list li {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 12px;
            font-size: 15px;
            color: #333;
        }

        .project-list i {
            color: #ff7a00;
            font-size: 18px;
        }

        .donation-banner {
            background-color: #fff4dc;
            /* soft cream */
            border-radius: 18px;
            padding: 32px 40px;
            /* thick dark border feel */
            position: relative;
            overflow: hidden;
        }

        /* Optional subtle pattern */
        .donation-banner::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: repeating-linear-gradient(45deg,
                    rgba(0, 0, 0, 0.03),
                    rgba(0, 0, 0, 0.03) 2px,
                    transparent 2px,
                    transparent 20px);
            pointer-events: none;
        }

        .banner-text {
            font-weight: 700;
            font-size: 1.75rem;
            color: #2b2b2b;
            max-width: 720px;
        }

        .btn-donate {
            background-color: #ff7a00;
            color: #fff;
            font-weight: 600;
            padding: 10px 24px;
            border-radius: 10px;
            border: none;
            transition: all 0.2s ease;
            width: 200px;
        }

        .btn-donate:hover {
            background-color: #e96f00;
            color: #fff;
        }


        .course-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.35);
            transition: transform 0.3s ease;
        }

        .course-card:hover {
            transform: translateY(-5px);
        }

        .course-img {
            flex: 0 0 45%;
        }

        .course-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .course-content {
            padding: 20px;
        }

        .course-content h5 {
            font-weight: 600;
            margin-bottom: 10px;
        }

        .course-content p {
            font-size: 14px;
            color: #555;
            margin-bottom: 15px;
        }

        .course-content .btn {
            border-radius: 25px;
            padding: 6px 25px;
            font-size: 14px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .course-card {
                flex-direction: column;
            }

            .course-img {
                width: 100%;
            }
        }


        .csr-section {
            color: #fff;
            padding: 60px 0;
            text-align: center;
        }

        .csr-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 40px;
        }

        .csr-image {
            border-radius: 20px;
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .csr-image:hover {
            transform: scale(1.05);
        }


        .slick-prev {
            left: -50px;
        }

        .slick-next {
            right: -50px;
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


        /* Slick slider customizations */
        .slick-prev,
        .slick-next {
            width: 40px;
            height: 40px;
            z-index: 1;
        }

        .slick-prev {
            left: -50px;
        }

        .slick-next {
            right: -50px;
        }

        .slick-prev:before,
        .slick-next:before {
            font-size: 40px;
            color: #333;
        }

        .slick-dots li button:before {
            font-size: 12px;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
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

        .slick-slide {
            padding: 0 !important;
            margin: 0 !important;
        }

        .slick-slide img {
            width: 100%;
            height: auto;
            display: block;
        }


        * Title */ .impact-title {
            font-weight: 600;
        }

        /* Total box */
        .total-box {
            background: #fff4ea;
            color: #000;
            border-radius: 14px;
            padding: 14px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .total-number {
            color: #ff6a00;
            font-weight: 700;
        }

        /* Scroll wrapper */
        .stats-scroll {
            overflow-x: auto;
            padding-bottom: 10px;
        }

        .stats-scroll::-webkit-scrollbar {
            height: 6px;
        }

        .stats-scroll::-webkit-scrollbar-thumb {
            background: #ced4da;
            border-radius: 10px;
        }

        /* Cards */
        .stat-card {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid #dee2e6;
            height: 100%;
        }

        /* Header */
        .stat-header {
            background: #e9ecef;
            color: #333;
            font-weight: 600;
            text-align: center;
            padding: 10px;
            border-radius: 14px 14px 0 0;
        }

        /* List */
        .stat-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .stat-list li {
            padding: 12px;
            border-bottom: 1px solid #dee2e6;
            font-size: 14px;
        }

        .stat-list li:last-child {
            border-bottom: none;
        }

        /* Links */
        .stat-list a {
            color: #0d6efd;
            text-decoration: none;
        }

        .stat-list a:hover {
            text-decoration: underline;
        }

        /* Ongoing */
        .ongoing {
            font-size: 12px;
            color: #6c757d;
        }

        /* Mobile adjustments */
        @media (max-width: 767px) {
            .stat-card {
                min-width: 220px;
            }

            .impact-title {
                font-size: 1.4rem;
            }

            .total-box {
                flex-direction: column;
                align-items: flex-start;
                gap: 6px;
            }

            .stat-list li {
                font-size: 13px;
                padding: 10px;
            }
        }




        .course-card {
            background-color: #fff7df;
            border-radius: 14px;
            overflow: hidden;
            text-align: center;
            padding-bottom: 20px;
            transition: all 0.3s ease;
            height: 100%;
        }

        .course-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .icon-box {
            background-color: #fff3d6;
            padding: 35px 0;
        }

        .icon-box i {
            font-size: 40px;
            color: #000;
        }

        .course-card h5 {
            margin-top: 20px;
            font-weight: 600;
            padding: 0 15px;
            font-size: 1.05rem;
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



    <!-- Hero Section -->
    <div class="hero">
        <div class="hero-container container">

            <!-- LEFT CONTENT -->
            <div class="hero-text">
                <h1>Lorem Ipsum Dolor<br>Sit Amet, Consectetur Adipisci</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>

            <!-- RIGHT IMAGES -->
            <div class="hero-grid">
                <img src="{{ asset('skill_image_one.jpg') }}" class="img-top" style="border: 2px solid white;" alt="">
                <img src="{{ asset('skill_image_two.jpg') }}" class="img-bottom-left" style="border: 2px solid white;"
                    alt="">
                <img src="{{ asset('skill_image_three.jpg') }}" class="img-bottom-right"
                    style="border: 2px solid white;" alt="">
            </div>

        </div>
    </div>



    <div class="container mt-5">
        <div class="row">
            <!-- Video Section -->
            <div class="col-lg-6">
                <div class="video-section">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <div class="video-description mt-3">
                        <div class="container mt-5">
                            <div class="row">
                                <!-- Text and List Section -->
                                <div class="col-12">
                                    <div class="text-section">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Donation Form Section -->
            <div class="col-lg-6">
                <div class="donation-form bg-light rounded">
                    <div class="container">
                        <div class="project-card mb-4">
                            <h5 class="project-title">Project Goals &amp; Objectives</h5>

                            <ul class="project-list">
                                <li><i class="bi bi-check-circle-fill"></i> Skill Enhancement</li>
                                <li><i class="bi bi-check-circle-fill"></i> Check your internet connection.</li>
                                <li><i class="bi bi-check-circle-fill"></i> If the problem is not resolved, contact us.
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> If the problem is not resolved, contact us.
                                </li>
                            </ul>
                        </div>

                        <!-- Duplicate cards as needed -->
                        <div class="project-card mb-4">
                            <h5 class="project-title">Project Goals &amp; Objectives</h5>
                            <ul class="project-list">
                                <li><i class="bi bi-check-circle-fill"></i> Skill Enhancement</li>
                                <li><i class="bi bi-check-circle-fill"></i> Check your internet connection.</li>
                                <li><i class="bi bi-check-circle-fill"></i> If the problem is not resolved, contact us.
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> If the problem is not resolved, contact us.
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i> If the problem is not resolved, contact us.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Error Messages -->
        <div class="container my-5">
            <div class="donation-banner d-flex flex-column flex-md-row align-items-center justify-content-between">
                <h2 class="banner-text mb-3 mb-md-0">
                    Join the effort to alleviate poverty and create employment.
                </h2>
                <a href="#" class="btn btn-donate">
                    Donate
                </a>
            </div>
        </div>

    </div>

    <section class="course-section py-5">
        <h3 style="margin: 0 auto;
    text-align: center;">Course Description</h3>
        <div class="container">

            <div class="row g-4">
                <!-- Card Start -->
                <div class="col-lg-6 col-md-12">
                    <div class="course-card d-flex">
                        <div class="course-img">
                            <img src="image.jpg" alt="course image">
                        </div>
                        <div class="course-content">
                            <h5>Lorem ipsum dolor sit amet,</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a href="#" class="btn btn-outline-warning">See Details</a>
                        </div>
                    </div>
                </div>
                <!-- Card End -->

                <!-- Duplicate cards as needed -->

                <div class="col-lg-6 col-md-12">

                    <div class="course-card d-flex">
                        <div class="course-img">
                            <img src="image.jpg" alt="course image">
                        </div>
                        <div class="course-content">
                            <h5>Lorem ipsum dolor sit amet,</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a href="#" class="btn btn-outline-warning">See Details</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-12">
                    <div class="course-card d-flex">
                        <div class="course-img">
                            <img src="image.jpg" alt="course image">
                        </div>
                        <div class="course-content">
                            <h5>Lorem ipsum dolor sit amet,</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a href="#" class="btn btn-outline-warning">See Details</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-12">
                    <div class="course-card d-flex">
                        <div class="course-img">
                            <img src="image.jpg" alt="course image">
                        </div>
                        <div class="course-content">
                            <h5>Lorem ipsum dolor sit amet,</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a href="#" class="btn btn-outline-warning">See Details</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-12">
                    <div class="course-card d-flex">
                        <div class="course-img">
                            <img src="image.jpg" alt="course image">
                        </div>
                        <div class="course-content">
                            <h5>Lorem ipsum dolor sit amet,</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a href="#" class="btn btn-outline-warning">See Details</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-12">
                    <div class="course-card d-flex">
                        <div class="course-img">
                            <img src="image.jpg" alt="course image">
                        </div>
                        <div class="course-content">
                            <h5>Lorem ipsum dolor sit amet,</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a href="#" class="btn btn-outline-warning">See Details</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-12">
                    <div class="course-card d-flex">
                        <div class="course-img">
                            <img src="image.jpg" alt="course image">
                        </div>
                        <div class="course-content">
                            <h5>Lorem ipsum dolor sit amet,</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a href="#" class="btn btn-outline-warning">See Details</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-12">
                    <div class="course-card d-flex">
                        <div class="course-img">
                            <img src="image.jpg" alt="course image">
                        </div>
                        <div class="course-content">
                            <h5>Lorem ipsum dolor sit amet,</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <a href="#" class="btn btn-outline-warning">See Details</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="csr-section">
        <div class="container" style="background-color: #fff4ec;">
            <h2 class="csr-title">Gallery</h2>

            <div class="csr-main-image text-center mb-4">
                <img style="
    height: auto;
    border-radius: 10px;
    width: 100%;
    height: 300px;
    object-fit: cover;
    max-height: 400px;
    height: auto;
    object-fit: contain;
    border-radius: 10px;
    display: block;
    margin: 0 auto;
    transition: 0.3s ease-in-out;
    cursor: pointer;" src="{{ asset('csr-one.png') }}" id="main-csr-image" alt="CSR Partner"
                    style="max-width: 100%; height: auto; border-radius: 10px;">
            </div>

            <div class="csr-slider">
                <div class="image-wrapper">
                    <img src="{{ asset('csr-one.png') }}" class="csr-image" alt="CSR Partner 1">
                </div>
                <div class="image-wrapper">
                    <img src="{{ asset('csr-two.png') }}" class="csr-image" alt="CSR Partner 2">
                </div>
                <div class="image-wrapper">
                    <img src="{{ asset('csr-three.png') }}" class="csr-image" alt="CSR Partner 3">
                </div>
                <div class="image-wrapper">
                    <img src="{{ asset('csr-four.png') }}" class="csr-image" alt="CSR Partner 4">
                </div>
                <div class="image-wrapper">
                    <img src="{{ asset('csr-five.png') }}" class="csr-image" alt="CSR Partner 5">
                </div>
                <div class="image-wrapper">
                    <img src="{{ asset('csr-two.png') }}" class="csr-image" alt="CSR Partner 2">
                </div>
                <div class="image-wrapper">
                    <img src="{{ asset('csr-three.png') }}" class="csr-image" alt="CSR Partner 3">
                </div>
                <div class="image-wrapper">
                    <img src="{{ asset('csr-four.png') }}" class="csr-image" alt="CSR Partner 4">
                </div>
                <div class="image-wrapper">
                    <img src="{{ asset('csr-five.png') }}" class="csr-image" alt="CSR Partner 5">
                </div>
            </div>
    </section>


    <div class="container py-5">

        <!-- Title -->
        <h2 class="text-center mb-4 impact-title">Impact Statistics</h2>

        <!-- Total -->
        <div class="total-box mb-4">
            <span class="fw-semibold">Total</span>
            <span class="total-number">1234 <small>(Ongoing)</small></span>
        </div>

        <!-- Scroll Wrapper -->
        <div class="stats-scroll">
            <div class="row g-4 flex-nowrap flex-md-wrap">

                <!-- Course -->
                <div class="col-8 col-md-3">
                    <div class="stat-card">
                        <div class="stat-header">Course</div>
                        <ul class="stat-list">
                            <li><a href="#">Small Business Management</a></li>
                            <li><a href="#">Smart Tailoring and Fashion Design</a></li>
                            <li><a href="#">Driving Training</a></li>
                            <li><a href="#">Driving Training</a></li>
                            <li><a href="#">Driving Training</a></li>
                            <li><a href="#">Driving Training</a></li>
                            <li><a href="#">Driving Training</a></li>
                            <li><a href="#">Driving Training</a></li>
                        </ul>
                    </div>
                </div>

                <!-- 2022 -->
                <div class="col-6 col-md-2">
                    <div class="stat-card">
                        <div class="stat-header">2022</div>
                        <ul class="stat-list text-center">
                            <li>23</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                        </ul>
                    </div>
                </div>

                <!-- 2023 -->
                <div class="col-6 col-md-2">
                    <div class="stat-card">
                        <div class="stat-header">2023</div>
                        <ul class="stat-list text-center">
                            <li>23</li>
                            <li>132</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                        </ul>
                    </div>
                </div>

                <!-- 2024 -->
                <div class="col-6 col-md-2">
                    <div class="stat-card">
                        <div class="stat-header">2024</div>
                        <ul class="stat-list text-center">
                            <li>23</li>
                            <li>132</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                            <li>-</li>
                        </ul>
                    </div>
                </div>

                <!-- 2025 -->
                <div class="col-8 col-md-3">
                    <div class="stat-card">
                        <div class="stat-header">2025</div>
                        <ul class="stat-list text-center">
                            <li>23 <span class="ongoing">(Ongoing)</span></li>
                            <li>132 <span class="ongoing">(Ongoing)</span></li>
                            <li>132 <span class="ongoing">(Ongoing)</span></li>
                            <li>132 <span class="ongoing">(Ongoing)</span></li>
                            <li>132 <span class="ongoing">(Ongoing)</span></li>
                            <li>132 <span class="ongoing">(Ongoing)</span></li>
                            <li>132 <span class="ongoing">(Ongoing)</span></li>
                            <li>132 <span class="ongoing">(Ongoing)</span></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>


    <section class="upcoming-courses py-5">
        <div class="container">
            <h2 class="text-center mb-5">Upcoming Courses</h2>

            <div class="row g-4 justify-content-center">

                <!-- Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="course-card">
                        <div class="icon-box">
                            <i class="bi bi-droplet"></i>
                        </div>
                        <h5>Plumbing and Pipe Fitting Training</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="course-card">
                        <div class="icon-box">
                            <i class="bi bi-lightbulb"></i>
                        </div>
                        <h5>Electrical Training</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="course-card">
                        <div class="icon-box">
                            <i class="bi bi-bricks"></i>
                        </div>
                        <h5>Masonry Training</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="course-card">
                        <div class="icon-box">
                            <i class="bi bi-tools"></i>
                        </div>
                        <h5>Rod Binding Training</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="course-card">
                        <div class="icon-box">
                            <i class="bi bi-grid-3x3-gap"></i>
                        </div>
                        <h5>Tiles Installation Training</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="course-card">
                        <div class="icon-box">
                            <i class="bi bi-paint-bucket"></i>
                        </div>
                        <h5>Painting Training</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="course-card">
                        <div class="icon-box">
                            <i class="bi bi-flower1"></i>
                        </div>
                        <h5>Gardening Training</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="course-card">
                        <div class="icon-box">
                            <i class="bi bi-shop"></i>
                        </div>
                        <h5>Street Food Training</h5>
                    </div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>

</html>


<script>
    $(document).ready(function () {
        $('.csr-slider').slick({
            dots: false,
            arrows: true,
            infinite: true,
            speed: 500,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            ]
        });

        $('.csr-image').on('click', function () {
            var src = $(this).attr('src'); // get clicked image src
            $('#main-csr-image').attr('src', src); // set it to main image
        });
    });
</script>