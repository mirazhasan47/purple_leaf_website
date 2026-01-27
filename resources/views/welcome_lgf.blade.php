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

<style>
    /* Use a class to hide the entire container immediately */
    .loading-state { opacity: 0; }
</style>
</head>

<body class="loading-state">

  <style>
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

    .profile-icon {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      object-fit: cover;
    }

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

    /* Logo styling */
    .logo {
      max-width: 152px;
    }

    /* Mobile logo on the left */
    .mobile-logo {
      display: none;
    }

    /* Desktop logo in the center */
    .desktop-logo {
      display: flex;
    }

    /* Profile and language in drawer for mobile */
    .drawer-items {
      display: none;
      padding: 15px 0;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      margin-bottom: 10px;
    }

    /* Responsive adjustments */
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
      }

      .navbar-collapse {
        background-color: #343a40;
        border-radius: 10px;
        padding: 15px;
        margin-top: 10px;
      }
    }

    /* Navbar Toggler */
    .navbar-toggler:focus {
      box-shadow: none;
    }

    @media (max-width: 991px) {
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
    }







    h1 {
      font-size: 50px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    p {
      font-size: 18px;
      margin-bottom: 30px;
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
      /* allow wrapping on small screens */
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .form-group {
      flex: 1;
      min-width: 100%;
      /* stack on mobile */
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
      /* full width by default */
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

    /* Tablet (2 per row) */
    @media (min-width: 768px) {
      .form-group {
        min-width: 48%;
        margin-right: 2%;
      }

      .form-group:last-child {
        margin-right: 0;
      }
    }

    /* Desktop (inputs + button in 1 row) */
    @media (min-width: 992px) {
      .form-group {
        min-width: 22%;
        /* four per row (3 inputs + 1 button) */
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

    .btn-primary {
      background-color: white;
      border-color: #ff6f47;
      color: #ff6f47;
      font-weight: bold;
      text-transform: uppercase;
      width: 100%;
    }

    .btn-primary-first {
      background-color: #ff6f47;
      border-color: #ff6f47;
      color: white;
      text-transform: uppercase;
      width: 30%;
    }


    .btn-primary-first:hover {
      background-color: #ff6f47;
      border-color: #ff6f47;
      color: white;
      text-transform: uppercase;
      width: 30%;
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

    h2 {
      font-size: 28px;
      font-weight: bold;
    }


    /* Custom Background Colors */
    .bg-blue {
      background-color: #3da2e0;
      border: 2px dashed #ffffff66;
    }

    .bg-teal {
      background-color: #20c997;
      border: 2px dashed #ffffff66;
    }

    .bg-yellow {
      background-color: #f0c045;
      border: 2px dashed #ffffff66;
    }

    .bg-red {
      background-color: #d65a41;
      border: 2px dashed #ffffff66;
    }

    .join-box i {
      display: block;
    }

    @media (max-width: 576px) {
      .join-box h5 {
        font-size: 1rem;
      }
    }



    /* Photo Gallery Section */
    .photo-box img {
      width: 100%;
      height: auto;
      object-fit: cover;
      border-radius: 15px;
    }

    /* Custom orange button */
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


    .opinion-card {
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


    .csr-section {
      background-color: #000;
      /* Optional: to match the dark theme */
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

    .image-wrapper {
      padding: 10px;
    }


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

    .footer-silhouettes {
      background: url('your-silhouette-image.png') center bottom no-repeat;
      background-size: contain;
      height: 120px;
      margin-top: 30px;
    }

    /* Responsive adjustments */
    @media (max-width: 767px) {

      .footer .col-md-2,
      .footer .col-md-3,
      .footer .col-md-4,
      .footer .col-md-5 {
        margin-bottom: 30px;
      }
    }



    /* General Navbar Styling */
    /* General Navbar Styling */



    /* Profile Icon on the Left */

    /* Language Switcher (EN/বাংলা) on the Left */
    .language-switcher {
      position: relative;
      margin-left: 20px;
      /* Add spacing between profile icon and language toggle */
      display: flex;
      align-items: center;
    }

    .lang-btn {
      color: #fff;
      font-size: 14px;
      border: none;
      background: transparent;
      font-weight: 500;
      padding: 5px 10px;
      text-transform: uppercase;
      margin-left: 10px;
      cursor: pointer;
      transition: color 0.3s ease;
    }

    .lang-btn:hover {
      color: orange;
      /* Add hover effect for language toggle */
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

    /* General Navbar Styling */
    .navbar {
      background-color: #343a40;
      /* Dark background */
      padding: 10px 0;
      font-family: 'Arial', sans-serif;
      /* Ensure font consistency */
    }

    .navbar .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    /* Profile Icon on the Left */


    /* Language Switcher (EN/বাংলা) on the Left */
    .language-switcher {
      position: relative;
      margin-left: 20px;
      /* Add spacing between profile icon and language toggle */
      display: flex;
      align-items: center;
    }

    .lang-btn {
      color: #fff;
      font-size: 14px;
      border: none;
      background: transparent;
      font-weight: 500;
      padding: 5px 10px;
      text-transform: uppercase;
      margin-left: 10px;
      cursor: pointer;
      transition: color 0.3s ease;
    }

    .lang-btn:hover {
      color: orange;
      /* Add hover effect for language toggle */
    }

    .dropdown-icon {
      font-size: 10px;
      /* Smaller arrow icon */
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



    /* General Navbar Styling */
    .navbar {
      background-color: #343a40;
      /* Dark background */
      padding: 10px 0;
      font-family: 'Arial', sans-serif;
      /* Ensure font consistency */
    }

    .navbar .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    /* Profile Icon on the Left */
    .profile-icon {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      object-fit: cover;
    }

    /* Language Switcher on the Left */
    .language-switcher {
      margin-left: 20px;
      /* Add spacing between profile icon and language toggle */
      display: flex;
      align-items: center;
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
      /* Add hover effect for language toggle */
    }

    /* Navbar Links Styling */






    /* Donate Button Styling */
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

    /* Responsive Navbar */








    .blog-bg {
      position: relative;
      height: 107.85vh;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 66px;
      overflow: hidden;
      /* to contain the pseudo-element */
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
      /* controls the blur of the image */
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
      /* strong #FDF4DA overlay */
      z-index: 2;
    }

    .blog-bg>* {
      position: relative;
      z-index: 3;
      /* content stays on top of image + overlay */
    }

    .hero {
      height: 80.85vh;
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
        url('{{ asset('heroBgLgf.jpg') }}') no-repeat center center;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 66px;
    }

    .hero .content {
      width: 100%;
      /* default for mobile */
      color: white;
      text-align: left;
    }

    /* When screen is large (desktop and up) */
    @media (min-width: 992px) {
      .hero .content {
        width: 40%;
      }
    }




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
    }

    .cardd {
      box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
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

    /* Responsive adjustments */
    @media (min-width: 576px) {
      .opinion-card {
        flex: 0 0 50%;
      }
    }

    @media (min-width: 768px) {
      .opinion-card {
        flex: 0 0 33.333%;
      }
    }

    @media (min-width: 992px) {
      .opinion-card {
        flex: 0 0 25%;
      }
    }




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

    .footer-image {
      margin-top: -152px;
    }


    .footer-container {
      transform: translateY(137px);
    }



    /* Modal Styles */
    .modal-custom {
      display: none;
      /* hidden by default */
      position: fixed;
      z-index: 9999;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      backdrop-filter: blur(5px);
      /* blur everything behind */
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
    <div class="container">
      <div class="content" style="margin-top: -10%;">
        <h4 id="hero_header">dummy text</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua...</p>

        <!-- Buttons -->
        <a href="#" class="btn btn-primary-first">Know More</a>
        <a href="#" class="btn btn-secondary">All Activities</a>
      </div>
    </div>
  </div>

  <div class="container donation-container">
    <h2>Make Your Donation</h2>
    <form>
      <div class="form-row">
        <div class="form-group">
          <label for="donationFund" class="form-label">Donation Fund*</label>
          <select class="form-control" id="donationFund">
            <option>Select</option>
            <option>Fund 1</option>
            <option>Fund 2</option>
            <option>Fund 3</option>
          </select>
        </div>
        <div class="form-group">
          <label for="phoneEmail" class="form-label">Phone / Email*</label>
          <input type="text" class="form-control" id="phoneEmail" placeholder="Type mobile/email">
        </div>
        <div class="form-group">
          <label for="donationAmount" class="form-label">Donation Amount*</label>
          <input type="number" class="form-control" id="donationAmount" placeholder="Write in number">
        </div>
        <div class="form-group"> <button type="submit" class="btn-donate">Donate</button></div>
      </div>
    </form>
    <div class="note">
      You Will Receive Tax Relief When You Donate To As-Sunnah Foundation. <a href="#">Click Here To Learn More</a>
    </div>
  </div>

  <div id="donationImageModal" class="modal-custom">
    <span class="modal-close">&times;</span>
    <img src="{{ asset('donation_image.png') }}" alt="Donation Image" class="modal-img">
  </div>
  <div class="container my-5">
    <div class="row">
      <!-- 8 Column Layout with Image -->
      <div class="col-lg-7 image-column">
        <img src="{{ asset('donation_image.png') }}" class="img-fluid" alt="Image" style="filter: none; width: 100%;">
      </div>

      <!-- 4 Column Layout with Content -->
      <div class="col-lg-5 content-column d-flex flex-column justify-content-center align-items-center text-center"
        style="background-color: #3F3F3FE5; color: white; padding: 2rem;">
        <div>
          <h2>Donation to LGF</h2>
          <p>Donations to Let's Go-on Foundation - LGF</p>
          <a href="#" class="btn-donate" style="display: inline-block; padding: 0.7rem 1.8rem; background-color: #FE6F0F; color: white; 
                  font-weight: 600; font-size: 1rem; border-radius: 50px; text-decoration: none; 
                  transition: 0.3s;">
            Learn More
            <img src="{{ asset('right_arrow.png') }}" class="img-fluid" alt="Image" style="">

          </a>

        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="text-center">
      <h2 class="mb-4" style="    margin-top: 131px;
    margin-bottom: 120px!important;">Ongoing Activities</h2>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="{{ asset('ongoing_one.png') }}" class="card-img-top" alt="Activity 1">
          <div class="card-body">
            <h5 class="card-title">Lorem ipsum</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua.</p>
            <a href="#" class="btn btn-primary">See Details</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="{{ asset('ongoing_two.png') }}" class="card-img-top" alt="Activity 2">
          <div class="card-body">
            <h5 class="card-title">Lorem ipsum</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua.</p>
            <a href="#" class="btn btn-primary">See Details</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="{{ asset('ongoing_three.png') }}" class="card-img-top" alt="Activity 3">
          <div class="card-body">
            <h5 class="card-title">Lorem ipsum</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua.</p>
            <a href="#" class="btn btn-primary">See Details</a>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center mt-4">
      <a href="{{ route('our-activities') }}" class="" style="    display: inline-block;
    padding: 0.7rem 1.8rem;
    background-color: #FE6F0F;
    color: white;
    font-weight: 600;
    font-size: 1rem;
    border-radius: 50px;
    text-decoration: none;
    transition: 0.3s;
    margin-top: 71px;
    margin-bottom: -31px!important;">
        All Activities
        <img src="{{ asset('right_arrow.png') }}" class="img-fluid" alt="Image" style="">

      </a>
    </div>
  </div>

  <div style="background-color: #FDF4DA;width:100%;">
    <div class="container mt-5">
      <div class="text-center">
        <h2 class="mb-4" style="margin-top: 20px;
    margin-bottom: 120px!important;
    transform: translateY(44px);">Donation Funds</h2>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="{{ asset('donation_funds_one.png') }}" class="card-img-top" alt="Activity 1">
            <div class="card-body">
              <h5 class="card-title">Lorem ipsum</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.</p>
              <a href="#" class="btn btn-primary" style="background-color:#ff6f47!important;color: white!important;">See
                Details</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <img src="{{ asset('donation_funds_two.png') }}" class="card-img-top" alt="Activity 2">
            <div class="card-body">
              <h5 class="card-title">Lorem ipsum</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.</p>
              <a href="#" class="btn btn-primary" style="background-color:#ff6f47!important;color: white!important;">See
                Details</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <img src="{{ asset('donation_funds_three.png') }}" class="card-img-top" alt="Activity 3">
            <div class="card-body">
              <h5 class="card-title">Lorem ipsum</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.</p>
              <a href="#" class="btn btn-primary" style="background-color:#ff6f47!important;color: white!important;">See
                Details</a>
            </div>
          </div>
        </div>
      </div>

      <div class="text-center mt-4">
        <a href="{{ route('lets-make-change-together') }}" class="" style="display: inline-block; padding: 0.7rem 1.8rem; background-color: #FE6F0F; color: white; 
                  font-weight: 600; font-size: 1rem; border-radius: 50px; text-decoration: none; 
                  transition: 0.3s;    margin-top: 71px;
    margin-bottom: 120px!important;">
          All Activities
          <img src="{{ asset('right_arrow.png') }}" class="img-fluid" alt="Image" style="">

        </a>
      </div>
    </div>

  </div>

  <section class="py-5 text-center">
    <div class="container">
      <h2 class="fw-bold">Join Us</h2>
      <p class="text-muted">Join Us Through Any Of The Following Methods And Play Your Part In Serving Humanity In Need.
      </p>

      <div class="row g-4 mt-4">
        <!-- Regular Donor -->
        <div class="col-md-6 col-lg-3">
          <div class="join-box bg-blue text-white text-center p-4 rounded h-100">
            <div class="icon mb-3">
              <i class="bi bi-cash-stack fs-1"></i>
            </div>
            <h5 class="fw-semibold">Regular Donor</h5>
          </div>
        </div>

        <!-- Lifetime & Donor Member -->
        <div class="col-md-6 col-lg-3">
          <div class="join-box bg-teal text-white text-center p-4 rounded h-100">
            <div class="icon mb-3">
              <i class="bi bi-gift fs-1"></i>
            </div>
            <h5 class="fw-semibold">Lifetime &<br>Donor Member</h5>
          </div>
        </div>

        <!-- Volunteer -->
        <div class="col-md-6 col-lg-3">
          <div class="join-box bg-yellow text-white text-center p-4 rounded h-100">
            <div class="icon mb-3">
              <i class="bi bi-people fs-1"></i>
            </div>
            <h5 class="fw-semibold">Volunteer</h5>
          </div>
        </div>

        <!-- Career -->
        <div class="col-md-6 col-lg-3">
          <div class="join-box bg-red text-white text-center p-4 rounded h-100">
            <div class="icon mb-3">
              <i class="bi bi-person-up fs-1"></i>
            </div>
            <h5 class="fw-semibold">Career</h5>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="photo-gallery py-5 text-center">
    <div class="container">
      <h2 class="fw-bold mb-4">Photos</h2>

      <div class="row g-4">
        <!-- Photo 1 -->
        <div class="col-6 col-md-4">
          <div class="photo-box">
            <img src="{{ asset('photos_one.png') }}" alt="Photo 1" class="img-fluid rounded">
          </div>
        </div>

        <!-- Photo 2 -->
        <div class="col-6 col-md-4">
          <div class="photo-box">
            <img src="{{ asset('photos_two.png') }}" alt="Photo 2" class="img-fluid rounded">
          </div>
        </div>

        <!-- Photo 3 -->
        <div class="col-6 col-md-4">
          <div class="photo-box">
            <img src="{{ asset('photos_three.png') }}" alt="Photo 3" class="img-fluid rounded">
          </div>
        </div>

        <!-- Photo 4 -->
        <div class="col-6 col-md-4">
          <div class="photo-box">
            <img src="{{ asset('photos_three.png') }}" alt="Photo 4" class="img-fluid rounded">
          </div>
        </div>

        <!-- Photo 5 -->
        <div class="col-6 col-md-4">
          <div class="photo-box">
            <img src="{{ asset('photos_five.png') }}" alt="Photo 5" class="img-fluid rounded">
          </div>
        </div>

        <!-- Photo 6 -->
        <div class="col-6 col-md-4">
          <div class="photo-box">
            <img src="{{ asset('photos_six.png') }}" alt="Photo 6" class="img-fluid rounded">
          </div>
        </div>
      </div>

      <!-- See More Button -->
      <div class="mt-4">
        <a href="#" class="btn btn-orange px-4 py-2">
          See More <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
  </section>


  <div class="blog-bg" style="width:100%;">
    <div class="container mt-5">
      <div class="text-center">
        <h2 class="mb-4" style="margin-top: 20px;
    margin-bottom: 120px!important;
    transform: translateY(44px);">Blogs</h2>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="{{ asset('donation_funds_one.png') }}" class="card-img-top" alt="Activity 1">
            <div class="card-body">
              <h5 class="card-title">Lorem ipsum</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.</p>
              <a href="#" class="btn btn-primary" style="background-color:#ff6f47!important;color: white!important;">See
                Details</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <img src="{{ asset('donation_funds_two.png') }}" class="card-img-top" alt="Activity 2">
            <div class="card-body">
              <h5 class="card-title">Lorem ipsum</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.</p>
              <a href="#" class="btn btn-primary" style="background-color:#ff6f47!important;color: white!important;">See
                Details</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <img src="{{ asset('donation_funds_three.png') }}" class="card-img-top" alt="Activity 3">
            <div class="card-body">
              <h5 class="card-title">Lorem ipsum</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.</p>
              <a href="#" class="btn btn-primary" style="background-color:#ff6f47!important;color: white!important;">See
                Details</a>
            </div>
          </div>
        </div>
      </div>

      <div class="text-center mt-4">
        <a href="#" class="" style="display: inline-block; padding: 0.7rem 1.8rem; background-color: #FE6F0F; color: white; 
                  font-weight: 600; font-size: 1rem; border-radius: 50px; text-decoration: none; 
                  transition: 0.3s;    margin-top: 71px;
    margin-bottom: 120px!important;">
          All Activities
          <img src="{{ asset('right_arrow.png') }}" class="img-fluid" alt="Image" style="">

        </a>
      </div>
    </div>

  </div>


  <section class="opinion-section py-5 text-center">
    <div class="container">
      <h2 class="fw-bold mb-5">Opinion</h2>

      <div class="slider-container">
        <button class="slider-arrow prev" aria-label="Previous slide">
          <span>&#8249;</span>
        </button>

        <div class="slider-track">
          <!-- Card 1 -->
          <div class="opinion-card">
            <div class="p-3  rounded bg-white h-100 cardd">
              <img src="{{ asset('opinion-one.png') }}" alt="User 1" class="img-fluid rounded mb-3">
              <h6 class="fw-bold mb-1">Bonnie Green</h6>
              <p class="text-muted mb-1">Senior Front-end Developer</p>
              <p class="text-secondary mb-2">Dhaka, Bangladesh</p>
              <p class="small text-muted">
                Worem ipsum dolor sit amet, consectetur adipiscing elit.
                Nunc vulputate libero et velit interdum, ac aliquet odio mattis.
              </p>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="opinion-card">
            <div class="p-3  rounded bg-white h-100 cardd">
              <img src="{{ asset('opinion-two.png') }}" alt="User 2" class="img-fluid rounded mb-3">
              <h6 class="fw-bold mb-1">John Doe</h6>
              <p class="text-muted mb-1">UI/UX Designer</p>
              <p class="text-secondary mb-2">New York, USA</p>
              <p class="small text-muted">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nunc vulputate libero et velit interdum, ac aliquet odio mattis.
              </p>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="opinion-card">
            <div class="p-3  rounded bg-white h-100 cardd">
              <img src="{{ asset('opinion-three.png') }}" alt="User 3" class="img-fluid rounded mb-3">
              <h6 class="fw-bold mb-1">Sarah Johnson</h6>
              <p class="text-muted mb-1">Backend Developer</p>
              <p class="text-secondary mb-2">London, UK</p>
              <p class="small text-muted">
                Dorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nunc vulputate libero et velit interdum, ac aliquet odio mattis.
              </p>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="opinion-card">
            <div class="p-3  rounded bg-white h-100 cardd">
              <img src="{{ asset('opinion-four.png') }}" alt="User 4" class="img-fluid rounded mb-3">
              <h6 class="fw-bold mb-1">Michael Brown</h6>
              <p class="text-muted mb-1">Project Manager</p>
              <p class="text-secondary mb-2">Sydney, Australia</p>
              <p class="small text-muted">
                Korem ipsum dolor sit amet, consectetur adipiscing elit.
                Nunc vulputate libero et velit interdum, ac aliquet odio mattis.
              </p>
            </div>
          </div>

          <div class="opinion-card">
            <div class="p-3  rounded bg-white h-100 cardd">
              <img src="{{ asset('opinion-five.png') }}" alt="User 4" class="img-fluid rounded mb-3">
              <h6 class="fw-bold mb-1">Michael Brown</h6>
              <p class="text-muted mb-1">Project Manager</p>
              <p class="text-secondary mb-2">Sydney, Australia</p>
              <p class="small text-muted">
                Korem ipsum dolor sit amet, consectetur adipiscing elit.
                Nunc vulputate libero et velit interdum, ac aliquet odio mattis.
              </p>
            </div>
          </div>

          <div class="opinion-card">
            <div class="p-3  rounded bg-white h-100 cardd">
              <img src="{{ asset('opinion-two.png') }}" alt="User 4" class="img-fluid rounded mb-3">
              <h6 class="fw-bold mb-1">Michael Brown</h6>
              <p class="text-muted mb-1">Project Manager</p>
              <p class="text-secondary mb-2">Sydney, Australia</p>
              <p class="small text-muted">
                Korem ipsum dolor sit amet, consectetur adipiscing elit.
                Nunc vulputate libero et velit interdum, ac aliquet odio mattis.
              </p>
            </div>
          </div>
        </div>

        <button class="slider-arrow next" aria-label="Next slide">
          <span>&#8250;</span>
        </button>
      </div>

      <div class="slider-dots"></div>
    </div>
  </section>



  <section class="csr-section">
    <div class="container">
      <h2 class="csr-title">Our CSR Partners</h2>

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


  <footer class="footer">
    <div class="container footer-container">
      <div class="row text-start">

        <!-- Logo & Description -->
        <div class="col-md-3">
          <img src="{{ asset('lgf-footer-logo.png') }}" alt="LGF Logo">
          <p class="mt-3">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
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
  <script>

    $(document).ready(function () {
      // Initialize slider variables
      let currentSlide = 0;
      const track = $('.slider-track');
      const cards = $('.opinion-card');
      const totalSlides = cards.length;
      const visibleSlides = getVisibleSlides();

      // Clone slides for infinite loop effect
      track.append(cards.clone());

      // Create dots
      for (let i = 0; i < totalSlides; i++) {
        $('.slider-dots').append('<div class="slider-dot" data-index="' + i + '"></div>');
      }

      const dots = $('.slider-dot');

      // Set initial active dot
      dots.eq(0).addClass('active');

      // Function to get number of visible slides based on screen width
      function getVisibleSlides() {
        if (window.innerWidth < 576) return 1;
        if (window.innerWidth < 768) return 2;
        if (window.innerWidth < 992) return 3;
        return 4;
      }

      // Function to update slider position
      function updateSlider() {
        const slideWidth = cards.eq(0).outerWidth(true);
        const newPosition = -currentSlide * slideWidth;
        track.css('transform', 'translateX(' + newPosition + 'px)');

        // Update active dot
        dots.removeClass('active');
        dots.eq(currentSlide % totalSlides).addClass('active');
      }

      // Next slide function
      function nextSlide() {
        currentSlide++;

        // If we've reached the end of the original slides, reset to beginning
        if (currentSlide >= totalSlides) {
          // Wait for transition to complete, then reset without animation
          setTimeout(() => {
            track.css('transition', 'none');
            currentSlide = 0;
            updateSlider();
            // Force reflow
            track.offset();
            // Re-enable transition
            track.css('transition', 'transform 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94)');
          }, 800);
        }

        updateSlider();
      }

      // Previous slide function
      function prevSlide() {
        currentSlide--;

        // If we've gone before the first slide, jump to the end
        if (currentSlide < 0) {
          // Wait for transition to complete, then reset without animation
          setTimeout(() => {
            track.css('transition', 'none');
            currentSlide = totalSlides - 1;
            updateSlider();
            // Force reflow
            track.offset();
            // Re-enable transition
            track.css('transition', 'transform 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94)');
          }, 800);
        }

        updateSlider();
      }

      // Arrow click events
      $('.slider-arrow.next').click(nextSlide);
      $('.slider-arrow.prev').click(prevSlide);

      // Dot click events
      dots.click(function () {
        currentSlide = $(this).data('index');
        updateSlider();
      });

      // Auto slide every 3 seconds
      let autoSlide = setInterval(nextSlide, 3000);

      // Pause auto slide on hover
      $('.slider-container').hover(
        function () {
          clearInterval(autoSlide);
        },
        function () {
          autoSlide = setInterval(nextSlide, 3000);
        }
      );

      // Handle window resize
      $(window).resize(function () {
        updateSlider();
      });
    });
    window.addEventListener('scroll', function () {
      const navbar = document.querySelector('.navbar');
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
  </script>


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
        responsive: [
          {
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
    });

  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const modal = document.getElementById('donationImageModal');
      const closeBtn = document.querySelector('.modal-close');

      // Show modal on page load
      modal.style.display = 'flex';

      // Close modal when clicking X
      closeBtn.onclick = function () {
        modal.style.display = 'none';
      }

      // Close modal when clicking outside the image
      window.onclick = function (event) {
        if (event.target == modal) {
          modal.style.display = 'none';
        }
      }
    });
  </script>
<script>
        // REMOVE the document.addEventListener wrapper
        const items = @json($items);

        items.forEach(item => {
            const el = document.getElementById(item.item_id);
            if (el) {
                el.innerText = item.text;
            }
        });

        // Immediately reveal
        document.body.classList.remove('loading-state');
    </script>
</body>

</html>