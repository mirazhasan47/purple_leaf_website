<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Purple Leaf</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


  <style>
    /* Load Poppins font */
    @font-face {
      font-family: 'Poppins';
      src: url('{{ asset("Poppins-ExtraLight.ttf") }}') format('truetype');
      font-weight: 400;
      font-style: normal;
    }

    @font-face {
      font-family: 'Montserrat_regular';
      src: url('{{ asset("Montserrat-Regular.ttf") }}') format('truetype');
      font-weight: 500;
      font-style: normal;
    }

    @font-face {
      font-family: 'Montserrat_bold';
      src: url('{{ asset("Montserrat-Bold.ttf") }}') format('truetype');
      font-weight: 400;
      font-style: normal;
    }

    @font-face {
      font-family: 'Montserat_extra_bold';
      src: url('{{ asset("Montserrat-ExtraBold.ttf") }}') format('truetype');
      font-weight: 400;
      font-style: normal;
    }

    @font-face {
      font-family: 'PoppinsLight';
      src: url('{{ asset("Poppins-Light.ttf") }}') format('truetype');
      font-weight: 400;
      font-style: normal;
    }


    @font-face {
      font-family: 'Montserrat';
      src: url('{{ asset("Montserrat-Light.ttf") }}') format('truetype');
      font-weight: 400;
      font-style: normal;
    }


    @font-face {
      font-family: 'Karla';
      src: url('{{ asset("Karla-ExtraLight.ttf") }}') format('truetype');
      font-weight: 400;
      font-style: normal;
    }

    @font-face {
      font-family: 'KarlaRegular';
      src: url('{{ asset("Karla-Regular.ttf") }}') format('truetype');
      font-weight: 400;
      font-style: normal;
    }


    @font-face {
      font-family: 'Lora-italic';
      src: url('{{ asset("Lora-Italic.ttf") }}') format('truetype');
      font-weight: 100;
      font-style: normal;
    }


    .karla {
      font-family: 'Karla';
    }

    /* Apply Poppins to all text */
    html,
    body {
      font-family: 'Montserrat', sans-serif;
      margin: 0;
      padding: 0;
      scroll-behavior: smooth;
    }

    .nav-link {
      font-family: 'Karla';
      font-size: 16px;
    }

    .lorafont {
      font-family: 'Lora-italic' !important;
    }

    /* Transparent Navbar */
    .navbar {
      background-color: transparent !important;
      transition: background-color 0.4s ease;
    }

    .navbar.scrolled {
      background-color: #0C041E !important;
      /* Purple background */
    }

    .navbar .nav-link {
      color: white !important;
      transition: color 0.3s ease;
    }

    .navbar .nav-link:hover {
      color: #ffe1fa !important;
    }

    .navbar-brand {
      color: #000 !important;
    }

    .navbar-brand img {
      transition: all 0.4s ease;
    }

    /* Hero Section */
    .hero {
      min-height: 100vh;
      background: url('{{ asset("HeroNewOne.jpg") }}') no-repeat center center;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      position: relative;
    }


    .hero::after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }

    .hero h1 {
      font-size: 4rem;
      font-weight: bold;
      color: #000;
      position: relative;
      z-index: 1;
    }

    /* Hero text */
    .heroText {
      position: absolute;
      width: 533.62px;
      height: 146px;
      top: 196px;
      font-family: 'Poppins', sans-serif;
      font-style: italic;
      font-weight: 600;
      font-size: 62px;
      line-height: 146.56%;
      text-align: center;
      color: #FFFFFF;
    }

    /* Section padding */
    section {
      padding: 100px 0;
    }

    /* Headings */
    .container {
      text-align: center;
      max-width: 88%;
    }

    .container h1 {
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
      font-style: unset;
      font-size: 72px;
      margin: 0;
      background: linear-gradient(141deg, #ef95ff, #efe5ed, #ffffff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      padding-bottom: 5px !important;
    }

    .purpleStyle {
      font-family: 'Poppins', sans-serif;
      font-weight: 500;
      font-style: italic;
      font-size: 40px;
      margin: 0;
      background: linear-gradient(90deg, #e9b6f1, #d882e5, #ffffff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .container h1 span {
      font-style: normal;
      color: #f7c5ff;
    }

    /* Hero subtitles */
    .indesign,
    .indesignTwo {
      font-family: 'Poppins', sans-serif;
      font-weight: 400;
      color: white;
      line-height: 6px;
      transform: translateY(17px);
      letter-spacing: 2px !important;
      white-space: nowrap;

    }

    .indesign {
      font-size: 35px;
    }

    .indesignTwo {
      font-size: 41px;
      letter-spacing: 0px;
    }

    /* Navbar when mobile menu is open */
    .navbar-collapse.show {
      background-color: rgba(111, 66, 193, 0.85);
      padding: 1rem;
      border-radius: 8px;
    }

    .navbar-collapse.show .nav-item {
      margin-bottom: 0.5rem;
    }

    /* Paragraph Hero */
    .paragraphHero {
      max-width: 50%;
    }

    /* Responsive images */
    .recImage {
      width: 392px;
    }

    /* Services Section */
    .services-section {
      background: url('{{ asset("our_services_bg.png") }}') no-repeat center center;
      min-height: 100vh;
      background-size: cover;
      padding: 60px 0;
      padding-bottom: 300px;
      padding-top: 100px;
    }

    .services-list {
      max-width: 877px;
      text-align: left;
    }

    /* Accordion styles */
    .accordion-button {
      background-color: transparent;
      color: white;
      font-weight: bold;
      font-size: 1.25rem;
      padding: 1rem 0;
      box-shadow: none;
      font-family: 'Montserrat_bold' !important;
    }

    .accordion-button:not(.collapsed) {
      background-color: transparent;
      color: #fff;
      box-shadow: none;
    }

    .accordion-button::after {
      content: '+';
      font-size: 2rem;
      transform: none;
      transition: transform 0.2s ease;
    }

    .accordion-button:not(.collapsed)::after {
      content: '−';
    }

    .accordion-body {
      padding: 1rem 0;
      color: rgba(255, 255, 255, 0.85);
      font-size: 1rem;
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    }

    /* Clients section */
    .clients-section {
      background-color: #ffffff;
    }

    .client-logo {
      max-height: 60px;
      filter: grayscale(1) !important;
      transition: all 0.3s ease-in-out;
    }

    .client-logo:hover {
      filter: grayscale(0) !important;
      opacity: 1;
    }

    /* About section */
    .about-section {
      background-color: #0b061f;
      padding-bottom: 100px !important;
    }

    .stat-box {
      padding-top: 58px !important;
      width: 254px;
      max-width: 350px;
      height: 215px;
      position: relative;
      border-radius: 4px;
      background: linear-gradient(145deg, #14102d, #0b061f);
      transition: transform 0.3s ease;
      z-index: 0;

    }


    /* Responsive adjustment for small screens */
    @media (max-width: 768px) {
      .stat-box {
        width: 60vw;
        height: auto;
        padding-top: 40px !important;
      }
    }

    @media (min-width: 1200px) {
      .widthControl {
        width: 80% !important;
      }
    }

    .stat-box::before {
      content: "";
      position: absolute;
      inset: 0;
      border-radius: 4px;
      padding: 2px;
      background: linear-gradient(180deg, #fc55ffe0, rgb(61 0 255 / 62%));
      -webkit-mask: linear-gradient(#fff 0 0) content-box,
        linear-gradient(#fff 0 0);
      -webkit-mask-composite: xor;
      mask-composite: exclude;
      pointer-events: none;
      z-index: -1;
    }


    .stat-box:hover {
      transform: translateY(-5px);
    }

    .stat-box h3 {
      font-size: 2.5rem;
      color: #ffffff;
    }

    .stat-box p {
      font-size: 1rem;
    }

    /* Responsive tweaks */
    @media (max-width: 600px) {
      .container h1 {
        font-size: 29px;
      }

      .marginSmall {
        margin-left: 20%;
      }

      .container {
        text-align: center;
        max-width: 90% !important;
      }

      .widthControl {
        width: 100% !important;
      }

      .paddingControl {
        padding-left: 0px !important;
        padding-right: 0px !important;
      }

      .indesign,
      .indesignTwo {
        font-size: 7vw;
        transform: translateY(7px);
      }

      .paragraphHero {
        max-width: 75%;

      }

      .fontPara {
        font-size: 12px;
      }

      .project-card {}

      /* ADDED: Ensure image is fluid on screens up to 600px */
      .recImage {
        width: 100% !important;
        height: auto;
      }

      /* ADJUSTED: Remove the 'down-card' and 'upCard' vertical shifts on mobile */
      .down-card,
      .upCard {
        position: static !important;
        top: auto !important;
      }

      .side-card {
        width: 95%;
        /* Adjust to be more fluid than 70% */
      }
    }



    /* Project card */
    .project-card img {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .project-card img:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .project-card h6 {
      font-size: 0.95rem;
      font-weight: 600;
      margin-top: 0.3rem;
      text-shadow: 0.1px 0 #424242, -0.1px 0 0px #424242;
      color: #424242;
      letter-spacing: 0.5px;
    }

    .project-card small {
      font-size: 0.8rem;
    }

    .project-card {
      margin-bottom: 100px;
    }

    /* CTA section */
    .cta-section {
      min-height: 60vh;
      background: linear-gradient(160deg, #0b061f, #2e2154);
      padding: 80px 20px;
    }

    .btn-outline-purple {

      border-radius: 4px;
      color: #fff;
      background-color: transparent;
      transition: all 0.3s ease;
      font-size: 1.25rem;
      border-image: linear-gradient(135deg, #ff4dfc, #6a4cff) 1;

    }

    .btn-outline-purple::before {
      content: "";

      background: linear-gradient(180deg, #fc55ffe0, rgb(61 0 255 / 62%));
      -webkit-mask: linear-gradient(#fff 0 0) content-box,
        linear-gradient(#fff 0 0);
      -webkit-mask-composite: xor;
      mask-composite: exclude;
      pointer-events: none;
      z-index: -1;
    }

    .btn-outline-purple:hover {
      background-color: #a259ff;
      color: #fff;
    }

    /* Dropdown menu styling */
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

    /* Mobile dropdown */
    @media (max-width: 991px) {
      .navbar .dropdown-menu {
        background-color: transparent;
        border: none;
        padding-left: 1.5rem;
        margin-top: 0.5rem;
        display: none;
      }

      .navbar .dropdown-menu.show {
        display: block;
      }

      .navbar .dropdown-item {
        padding: 0.75rem 0;
        font-size: 1.1rem;
      }

      .navbar-collapse {
        padding: 1rem;
      }

      .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.5rem;
        vertical-align: middle;
        content: "▼";
        font-size: 0.7rem;
        border: none !important;
      }

      .dropdown-toggle[aria-expanded="true"]::after {
        content: "▲";
      }
    }


    .gradient-text {
      text-align: left;
      font-family: 'Montserrat_bold', sans-serif;
      font-weight: 700 !important;
      font-style: unset;
      font-size: 4rem;
      margin: 0;
      background: linear-gradient(141deg, #D877FF, #5C32DD, #ffffff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }


    .contact-section a {
      color: inherit;
      /* Use same color as surrounding text */
      text-decoration: none;
      /* No underline */
    }

    .contact-section a:hover {
      color: #a259ff;
      /* Optional hover color */
      text-decoration: none;
      /* Still no underline */
    }

    .contact-section ul li {
      text-align: left;
      /* Align list items left */
    }

    .side-card {
      width: 70%;
      margin: 0 auto;
    }

    .down-card {
      position: relative;
      top: 60px;
    }

    .enhanceText {
      font-family: 'Montserat_extra_bold' !important;
      min-width: 50%;
      max-width: 53%;
      margin-bottom: 30px;
    }

    .featureText {
      font-family: 'Montserrat_regular';
      font-size: 20px;
      margin-top: 80px;
      margin-bottom: 40px;
      font-weight: 500;
    }

    h6 {
      font-weight: 700;
      font-size: 16px;
    }

    .fontFourty {
      font-size: 38px;
      font-weight: 700;
    }

    .aboutus {
      font-size: 20px;
      font-weight: 500;
      margin-bottom: 20px !important;
    }

    .ourteam {
      font-weight: 700 !important;
      font-size: 32px;
      line-height: 39px;
      text-align: left;
      margin-bottom: 40px !important;
    }

    .purplesmall {
      font-family: 'KarlaRegular';
      font-weight: 400;
      font-size: 16px;
      line-height: 140%;

    }

    .onek {
      font-family: 'Montserat_extra_bold';
      font-weight: 700;
      font-style: Bold;
      font-size: 50px;
      line-height: 140%;
      margin-bottom: 25px !important;

    }

    #work {
      padding-top: 6rem !important;
      padding-bottom: 10rem !important;
    }

    .our_services {
      margin-bottom: 6rem;
    }

    .accordion-button {
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);

    }

    .about-us {
      text-align: left;
      margin-top: 77px;
      margin-bottom: 40px !important;
      font-weight: bold !important;
    }

    .blog-section {
      padding-top: 120px !important;
      padding-bottom: 120px !important;
    }

    .teamup {
      margin-top: 120px !important;
      margin-bottom: 30px !important;
    }

    .becomeaclient {
      margin-top: 20px !important;
      margin-bottom: 100px !important;
    }

    .letstalk {
      font-family: 'Karla';
    }



    @media (max-width: 600px) {

      /* Make the container fluid for tiny screens */
      .container-lg {
        padding-left: 6px !important;
        padding-right: 6px !important;
      }

      /* Force section header and project card container to full width */
      .side-card {
        width: 100% !important;
        margin-left: auto;
        margin-right: auto;
      }

      /* Make the images fluid and stop them from dictating layout */
      .recImage {
        width: 100% !important;
        /* Image will now take full width of its column */
        height: auto;
      }

      /* Adjust typography for better fit */
      .enhanceText {
        font-size: 28px;
        /* Reduce heading size significantly */
        line-height: 1.2;
        max-width: 100%;
        min-width: 100%;
      }

      .featureText {
        margin-top: 40px;
        /* Less margin on top */
        font-size: 16px;
      }

      /* Adjust column layout to ensure one item per row if needed, 
       but `row-cols-1` handles this well, so mainly focus on spacing */
      .row-cols-sm-2 {
        --bs-gutter-x: 1.5rem;
        /* Ensure standard gutter */
        --bs-gutter-y: 1.5rem;
      }

      /* Reduce vertical padding for project cards */
      .project-card {
        margin-bottom: 30px;
      }

      /* Remove vertical shift to keep layout clean on small screen */
      .down-card,
      .upCard {
        position: static !important;
        top: auto !important;
      }

      /* Adjust overall section padding for a better mobile experience */
      #work {
        padding-top: 4rem !important;
        padding-bottom: 4rem !important;
      }

      .accordion-button {
        font-size: 20px;
      }

      .gradient-text {
        font-size: 2rem;
      }
    }

    .accordion-item:last-child .accordion-button {
      border-bottom: none !important;
    }








    /* Navbar Header */
    .custom-header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 20px;
      z-index: 2000;
      /* Stays above overlay */
      box-sizing: border-box;
    }

    .navbar-brand img {
      max-width: 130px;
    }

    .menu-toggle {
      background: none;
      border: none;
      cursor: pointer;
      padding: 0;
    }

    .menu-toggle img {
      width: 20px;
      height: 20px;
      transition: transform 0.3s ease;
    }

    /* Full Screen Overlay */
    .nav-overlay {
      position: fixed;
      inset: 0;
      background: rgba(0, 0, 0, 0.95);
      backdrop-filter: blur(10px);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      transform: translateY(-100%);
      transition: transform 0.5s cubic-bezier(0.77, 0, 0.175, 1);
      z-index: 1000;
      align-items: self-start;
      padding-left: 20px;
    }

    .nav-overlay.active {
      transform: translateY(0);
      align-items: self-start;
      padding-left: 20px;
    }

    /* Navigation Links */
    .nav-linkss {
      list-style: none;
      text-align: left;
      padding: 0;
      font-family: 'Montserrat_bold';
      color: white;
    }

    .nav-linkss a {
      color: white;
      text-decoration: none;
      font-size: 24px;
      display: block;
      margin: 20px 0;
      transition: opacity 0.3s;
      font-family: 'Montserrat_bold';
    }

    /* Dropdown Style */
    .dropdown-container {
      text-align: center;
    }

    .dropdown-btn {
      background: none;
      border: none;
      color: #7d4fdf;
      /* Purple accent */
      font-size: 24px;
      cursor: pointer;
      margin: 20px 0;
    }

    .dropdown-content {
      display: none;
      flex-direction: column;
      background: rgba(255, 255, 255, 0.05);
      border-radius: 10px;
      padding: 10px;
    }

    .dropdown-content a {
      font-size: 18px;
      margin: 10px 0;
      color: #ccc;
    }

    .dropdown-content.show {
      display: flex;
    }

    .no-scroll {
      overflow: hidden;
    }

    @media (min-width: 992px) {

      .custom-header,
      .nav-overlay {
        display: none !important;
      }
    }


    /* Add this to your CSS */
    .navbar-brand {
      transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    /* This class will be toggled by JavaScript */
    .logo-hidden {
      opacity: 0;
      visibility: hidden;
      pointer-events: none;
      /* Prevents clicking the logo while hidden */
    }

    /* Ensure the toggle button stays visible on top of the menu */
    .custom-header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 20px;
      z-index: 3000;
    }



    /* Smooth transition for the logo */
    .navbar-brand {
      transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    /* This class hides the logo */
    .logo-hidden {
      opacity: 0;
      visibility: hidden;
      pointer-events: none;
      /* Prevents accidental clicks while invisible */
    }


    @media (max-width: 992px) {
      .navbar {
        display: none !important;
      }
    }


    .indesignTwo {
      white-space: nowrap;
    }

    /* Small screens: break after the comma with extra space between lines */
    @media (max-width: 600px) {
      .indesignTwo {
        white-space: normal;
        line-height: 1;
        transform: translateY(-15px);
      }

      .indesignTwo span.purpleStyle::before {
        content: "\A";
        /* insert line break */
        white-space: pre;
        /* make the line break work */
      }
    }

    .custom-header {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 2000;
      /* Higher than the nav-overlay */
      transition: background-color 0.3s ease;
    }

    /* This class will be applied on scroll OR when the menu is open */
    .header-dark {
      background-color: #000000 !important;
    }























    /* Force the list to wrap and behave like a grid */
    #blogTabs {
      display: flex !important;
      flex-wrap: wrap !important;
      border-bottom: 2px solid #e0e0e0 !important;
      padding: 0;
    }

    /* Make each tab item take up exactly half the width */
    #blogTabs .nav-item {
      width: 50%;
    }

    /* Ensure the buttons fill the 50% width and handle the underline */
    #blogTabs .nav-link {
      width: 100%;
      border: none !important;
      background: transparent !important;
      color: #888;
      padding: 10px 15px 12px 0;
      /* Padding-right for breathing room, 0 on left */
      position: relative;
      text-align: left;
    }

    #blogTabs .nav-link.active {
      color: #000 !important;
      font-weight: 600;
    }

    /* The Gradient Underline - now spans the width of the 50% column */
    #blogTabs .nav-link.active::after {
      content: "";
      position: absolute;
      bottom: -2px;
      /* Sits on the grey border */
      left: 0;
      width: 100%;
      height: 4px;
      background: linear-gradient(90deg, #a855f7 0%, #6366f1 100%);
      border-radius: 2px;
    }


    .cookie-consent {
      position: fixed;
      bottom: 20px;
      left: 20px;
      right: 20px;
      max-width: 600px;
      margin: auto;
      background: #ffffff;
      padding: 15px 20px;
      border-radius: 12px;
      display: none;
      z-index: 9999;
      font-size: 14px;
    }



    .cookie-overlay {
      position: fixed;
      inset: 0;
      background: rgba(0, 0, 0, 0.55);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 9999;
    }

    .cookie-card {
      background: #ffffff;
      width: 90%;
      max-width: 420px;
      padding: 28px 24px;
      border-radius: 14px;
      text-align: center;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
      margin-top: 5% !important;
      margin: 0 auto;
    }

    .cookie-card h3 {
      font-size: 22px;
      font-weight: 700;
      margin-bottom: 12px;
    }

    .cookie-card p {
      font-size: 15px;
      line-height: 1.6;
      color: #555;
      margin-bottom: 22px;
    }

    .cookie-card button {
      width: 100%;
      padding: 12px;
      background: #5b3df5;
      color: #fff;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
    }

    .cookie-card button:hover {
      background: #4a2ee0;
    }

    .cookie-card a {
      display: inline-block;
      margin-top: 14px;
      font-size: 15px;
      color: #5b3df5;
      text-decoration: underline;
      cursor: pointer;
    }


    .cookie-toast {
      position: fixed;
      bottom: 24px;
      right: 24px;
      background: #16a34a;
      /* green */
      color: #fff;
      padding: 14px 20px;
      border-radius: 12px;
      font-size: 15px;
      font-weight: 600;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
      display: flex;
      align-items: center;
      gap: 8px;
      z-index: 10000;

      /* animation */
      opacity: 0;
      transform: translateY(20px);
      animation: toastIn 0.4s ease forwards;
    }

    .cookie-toast p {
      margin: 0;
    }

    /* Toast animation */
    @keyframes toastIn {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

<body>

  <header class="custom-header">
    <a class="navbar-brand" data-target="">
      <img src="http://localhost/purple_leaf_lgf_mix/public/LogoOne.png" alt="Logo">
    </a>

    <button class="menu-toggle" onclick="toggleMenu()">
      <img id="toggleIcon" src="http://localhost/purple_leaf_lgf_mix/public/menuIcon.png" alt="Menu">
    </button>
  </header>

  <nav class="nav-overlay" id="navOverlay">
    <ul class="nav-linkss">
      <li><a data-target="services" onclick="toggleMenu()">Work</a></li>
      <li><a data-target="about" onclick="toggleMenu()">Services</a></li>
      <li><a data-target="blog" onclick="toggleMenu()">About</a></li>
    </ul>
  </nav>


  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" data-target="">
        <img src="{{ asset('LogoOne.png') }}" alt="Purple Leaf Logo" style="max-width: 152px;">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"
        style="border: none; outline: none; box-shadow: none; background: transparent;">
        <!-- Replace default icon with your image -->
        <img src="{{ asset('menuIcon.png') }}" alt="Menu" style="width: 40px; height: 40px;">
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav me-3">
          <!-- Projects Dropdown -->
          <li class="nav-item dropdown">
          <li class="nav-item">
            <a class="nav-link" data-target="work">Featured Works</a>
          </li>

          <a class="nav-link dropdown-toggle" id="projectsDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Projects
          </a>

          <ul class="dropdown-menu" style="left: unset!important;" aria-labelledby="projectsDropdown">
            <!-- All Projects -->
            <li><a class="dropdown-item" href="{{ url('/#work') }}">All Projects</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <!-- Individual Projects -->
            <li><a class="dropdown-item" href="{{ route('flexinote') }}">FLEXI NOTE</a></li>
            <li><a class="dropdown-item" href="{{ route('gim') }}">GM - GOODS IN MOTION</a></li>
            <li><a class="dropdown-item" href="{{ route('commchat') }}">COMCHAT METAVERSE MESSENGER</a></li>
            <li><a class="dropdown-item" href="{{ route('londonhealth') }}">LONDON HEALTH</a></li>
            <!-- <li><a class="dropdown-item" href="{{ route('dotline') }}">DOTONLINE BULK SMS</a></li> -->
            <!-- <li><a class="dropdown-item" href="{{ route('karighor') }}">KARCHER</a></li>
            <li><a class="dropdown-item" href="{{ route('eskimi') }}">ESHIN</a></li> -->
            <li><a class="dropdown-item" href="{{ route('edleader') }}">EGLOBALER 21</a></li>
            <li><a class="dropdown-item" href="{{ route('becomeaclient') }}">BECOME A CLIENT</a></li>
          </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-target="services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-target="about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-target="blog">Blog</a>
          </li>
        </ul>
        <!-- Lets Talk Button -->
        <a href="{{ route('becomeaclient') }}" class="btn btn-outline-light letstalk"
          style="border-radius: 100px;">Let's Talk</a>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <div class="hero">
    <div class="container text-center">
      <div class="row g-0" style="margin-top: 80px;">
        <div class="col-12 d-flex justify-content-center align-items-center gap-1">
          <h1 class="m-0 lorafont">Alchemy</h1>
          <p class="m-0 indesign">in design.</p>
        </div>
      </div>

      <p class="m-0 indesignTwo mt-2">Bold, innovative <span class="purpleStyle">&</span> divine.</p>

      <!-- Image below the text -->
      <div class="row mt-4">
        <div class="col-12">
          <img src="{{ asset('lightning.png') }}" alt="Hero Image" class="img-fluid porda-no-filter"
            style="max-width: 400px; filter: none; margin-top: 19px; margin-bottom: -5px;"
            data--porda-condition="ImgSmall">
        </div>
      </div>

      <!-- Paragraph below the image -->
      <div class="row justify-content-center">
        <div class="col-12 text-center paragraphHero">
          <p class="lead text-white mt-3 karla fontPara">
            We build engaging user experience for early-stage startups by connecting the dots between users’ needs and
            the client’s business model. </p>
        </div>
      </div>

      <div class="row justify-content-center mt-4">
        <div class="col-12 text-center">
          <a data-target="work" style="z-index: 100;position: relative;">
            <img src="{{ asset('slider.png') }}" alt="Additional Image" class="img-fluid clickable-scroll" style="    max-width: 300px;
    margin-top: 20px;
    opacity: 0.5;
    cursor: pointer;
    transform: translateY(-10px);"></a>
        </div>
      </div>
    </div>
  </div>
  </div>


  <section id="work" class="py-5">
    <div class="container-lg">

      <!-- Section Header -->
      <div class="text-start mb-5 featuredText row side-card">
        <p class="text-uppercase text-muted small featureText">Featured Works</p>
        <h2 class="fw-bold enhanceText">
          Enhancing brands with digital experience beyond compare.
        </h2>
      </div>

      <!-- Projects Grid -->
      <div class="row row-cols-1 row-cols-sm-2 custom-gap justify-content-center side-card">

        <!-- Project 1 -->
        <div class="col">
          <a href="{{ route('flexinote') }}" class="text-decoration-none text-dark">
            <div class="project-card">
              <div class="justify-content-center down-card">
                <div class="col-auto">
                  <img src="{{ asset('recOne.png') }}" class="img-fluid rounded recImage" alt="Flex Note">
                  <div class="mt-4 text-start">
                    <h6 class="mb-0">FLEXI NOTE</h6>
                    <small class="text-muted">Productivity</small>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

        <!-- Project 2 -->
        <div class="col">
          <a href="{{ route('gim') }}" class="text-decoration-none text-dark">
            <div class="project-card upCard">
              <div class="justify-content-center">
                <div class="col-auto">
                  <img src="{{ asset('recTwo.png') }}" class="img-fluid rounded recImage" alt="GM Goods In Motion">
                  <div class="mt-4 text-start">
                    <h6 class="mb-0">GM - GOODS IN MOTION</h6>
                    <small class="text-muted">Logistics Service</small>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

        <!-- Project 3 -->
        <div class="col">
          <a href="{{ route('eskimi') }}" class="text-decoration-none text-dark">
            <div class="project-card">
              <div class="justify-content-center down-card">
                <div class="col-auto">
                  <img src="{{ asset('recThree.png') }}" class="img-fluid rounded recImage" alt="Eshin">
                  <div class="mt-4 text-start">
                    <h6 class="mb-0">ESHIN</h6>
                    <small class="text-muted">Productivity</small>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

        <!-- Project 4 -->
        <div class="col">
          <a href="{{ route('londonhealth') }}" class="text-decoration-none text-dark">
            <div class="project-card upCard">
              <div class="justify-content-center">
                <div class="col-auto">
                  <img src="{{ asset('recFour.png') }}" class="img-fluid rounded recImage" alt="London Health">
                  <div class="mt-4 text-start">
                    <h6 class="mb-0">LONDON HEALTH</h6>
                    <small class="text-muted">HealthTech</small>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

        <!-- Project 5 -->
        <div class="col">
          <a href="{{ route('edleader') }}" class="text-decoration-none text-dark">
            <div class="project-card">
              <div class="justify-content-center down-card">
                <div class="col-auto">
                  <img src="{{ asset('recFive.png') }}" class="img-fluid rounded recImage" alt="Eglobaler 21">
                  <div class="mt-4 text-start">
                    <h6 class="mb-0">EGLOBALER 21</h6>
                    <small class="text-muted">Logistics Service</small>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

        <!-- Project 6 -->
        <div class="col">
          <a href="{{ route('karighor') }}" class="text-decoration-none text-dark">
            <div class="project-card upCard">
              <div class="justify-content-center">
                <div class="col-auto">
                  <img src="{{ asset('recSix.png') }}" class="img-fluid rounded recImage" alt="Karcher">
                  <div class="mt-4 text-start">
                    <h6 class="mb-0">KARCHER</h6>
                    <small class="text-muted">Productivity</small>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

        <!-- Project 7 -->
        <div class="col">
          <a href="{{ route('commchat') }}" class="text-decoration-none text-dark">
            <div class="project-card">
              <div class="justify-content-center down-card">
                <div class="col-auto">
                  <img src="{{ asset('recSeven.png') }}" class="img-fluid rounded recImage" alt="Comchat">
                  <div class="mt-4 text-start">
                    <h6 class="mb-0">COMCHAT METAVERSE MESSENGER</h6>
                    <small class="text-muted">Messaging Platform</small>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

        <!-- Project 8 -->
        <div class="col">
          <a href="{{ route('dotline') }}" class="text-decoration-none text-dark">
            <div class="project-card upCard">
              <div class="justify-content-center">
                <div class="col-auto">
                  <img src="{{ asset('recEight.png') }}" class="img-fluid rounded recImage" alt="Dotonline Bulk SMS">
                  <div class="mt-4 text-start">
                    <h6 class="mb-0">DOTONLINE BULK SMS</h6>
                    <small class="text-muted">Communication</small>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>



  <section class="services-section d-flex align-items-center justify-content-center text-white" id="services">
    <div class="container text-center">
      <p class="text-uppercase our_services" style="font-size: 20px;">Our Services</p>
      <div class="accordion services-list mx-auto mt-4" id="servicesAccordion">

        <!-- Web Application -->
        <div class="accordion-item bg-transparent border-0 text-white">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed service-toggle fontFourty" type="button" data-bs-toggle="collapse"
              data-bs-target="#webApp" aria-expanded="false" aria-controls="webApp">
              Web Application
            </button>
          </h2>
          <div id="webApp" class="accordion-collapse collapse" data-bs-parent="#servicesAccordion">
            <div class="accordion-body d-flex align-items-center justify-content-between">
              <div class="text-start pe-3">
                We build affordable and dynamic web applications tailored to your business needs.
                Our solutions are secure, user-friendly, and built for long-term growth. </div>
              <img src="{{ asset('our_services_one.png') }}" alt="Web Application" class="img-fluid"
                style="max-width:134px;">
            </div>
          </div>
        </div>

        <!-- Mobile -->
        <div class="accordion-item bg-transparent border-0 text-white">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed service-toggle fontFourty" type="button" data-bs-toggle="collapse"
              data-bs-target="#mobile" aria-expanded="false" aria-controls="mobile">
              Mobile Application Development
            </button>
          </h2>
          <div id="mobile" class="accordion-collapse collapse" data-bs-parent="#servicesAccordion">
            <div class="accordion-body d-flex align-items-center justify-content-between">
              <div class="text-start pe-3">
                We deliver enterprise-ready native and cross-platform mobile applications.
                Built to scale, perform reliably, and support business growth. </div>
              <img src="{{ asset('our_services_two.png') }}" alt="Mobile App" class="img-fluid"
                style="max-width:134px;">
            </div>
          </div>
        </div>

        <!-- Branding -->
        <div class="accordion-item bg-transparent border-0 text-white">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed service-toggle fontFourty" type="button" data-bs-toggle="collapse"
              data-bs-target="#branding" aria-expanded="false" aria-controls="branding">
              Branding Service
            </button>
          </h2>
          <div id="branding" class="accordion-collapse collapse" data-bs-parent="#servicesAccordion">
            <div class="accordion-body d-flex align-items-center justify-content-between">
              <div class="text-start pe-3">
                We create unique brand identities that make your business stand out.
                With creative design and consistent visual style, we craft a lasting impression. </div>
              <img src="{{ asset('our_services_three.png') }}" alt="Branding" class="img-fluid"
                style="max-width:134px;">
            </div>
          </div>
        </div>

        <!-- Marketing -->
        <div class="accordion-item bg-transparent border-0 text-white">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed service-toggle fontFourty" type="button" data-bs-toggle="collapse"
              data-bs-target="#marketing" aria-expanded="false" aria-controls="marketing">
              Digital Marketing & SEO Service
            </button>
          </h2>
          <div id="marketing" class="accordion-collapse collapse" data-bs-parent="#servicesAccordion">
            <div class="accordion-body d-flex align-items-center justify-content-between">
              <div class="text-start pe-3">
                We grow your audience with smart, results-driven marketing and SEO strategies.
                Frankly, we focus on real traffic, higher rankings, and measurable business growth </div>
              <img src="{{ asset('our_services_four.png') }}" alt="Marketing" class="img-fluid"
                style="max-width:134px;">
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <section class="clients-section py-5 text-center">
    <div class="container" style="margin-top: 70px; margin-bottom: 70px; max-width: 968px;">
      <h6 class="text-muted fw-bold mb-5">Our Clients</h6>

      <div class="d-flex justify-content-center">
        <img src="{{ asset('Logos.png') }}" alt="Our Clients Logos" class="client-logos img-fluid">
      </div>
    </div>
  </section>


  <section class="about-section py-5 text-white" id="about">
    <div class="container my-5 about-container" style="width: 976px;">
      <div class="row justify-content-start">
        <div class="col-lg-8 paddingControl" style="">
          <p class="text-uppercase text-white small mb-2 about-label aboutus about-us" style="text-align: left;">About
            Us</p>
          <h2 class="fw-bold mb-4 text-white about-heading ourteam" style="text-align: left;">
            Innovating Digital Solutions Since 2022 </h2>
          <p class="text-white about-description purplesmall" style="text-align: left;">
            PurpleLeaf Ltd. is a leading software development company dedicated to crafting cutting-edge digital
            solutions that drive business growth and transformation.
          </p>

          <p class="text-uppercase text-white small mb-2 about-label aboutus about-us" style="text-align: left;">Our
            Mission</p>

          <p class="text-white about-description purplesmall" style="text-align: left;">
            To be your trusted partner in digital innovation, empowering businesses and people to achieve more with
            smarter solutions.
          </p>


          <p class="text-uppercase text-white small mb-2 about-label aboutus about-us" style="text-align: left;">Our
            Vision</p>

          <p class="text-white about-description purplesmall" style="text-align: left;">
            To be the fastest-growing digital transformation partner, leveraging global talent for real impact.
          </p>


          <p class="text-uppercase text-white small mb-2 about-label aboutus about-us" style="text-align: left;">Our
            Values</p>

          <p class="text-white about-description purplesmall" style="text-align: left;">
            Ownership – We take responsibility and tackle challenges head-on.
          </p>


          <p class="text-uppercase text-white small mb-2 about-label aboutus about-us" style="text-align: left;">Client
            Partnership</p>

          <p class="text-white about-description purplesmall" style="text-align: left;">
            We deliver smarter solutions that exceed expectations.
          </p>

          <p class="text-uppercase text-white small mb-2 about-label aboutus about-us" style="text-align: left;">Grow
            People</p>

          <p class="text-white about-description purplesmall" style="text-align: left;">
            We hire, develop, and support our team to be the best.
          </p>


          <p class="text-uppercase text-white small mb-2 about-label aboutus about-us" style="text-align: left;">Agility
            and Excellence</p>

          <p class="text-white about-description purplesmall" style="text-align: left;">
            Quick delivery, continuous improvement, outstanding results.
          </p>


          <p class="text-uppercase text-white small mb-2 about-label aboutus about-us" style="text-align: left;">Honesty
          </p>

          <p class="text-white about-description purplesmall" style="text-align: left;">
            Open, ethical, and trusted in all we do.
          </p>

          <p class="text-uppercase text-white small mb-2 about-label aboutus about-us" style="text-align: left;">Passion
            and Commitment</p>

          <p class="text-white about-description purplesmall" style="text-align: left;">
            We do what we love and deliver on our promises.
          </p>


          <p class="text-uppercase text-white small mb-2 about-label aboutus about-us" style="text-align: left;">Our
            Team</p>

          <p class="text-white about-description purplesmall" style="text-align: left;">
            A passionate team of 120+ developers, designers, and project managers creating functional, attractive, and
            user-friendly software Awards & Recognitions.</p>
        </div>
      </div>

      <div class="row mt-5 g-4 justify-content-center">
        <div class="col-md-4 d-flex justify-content-center">
          <div class="stat-box text-center p-4">
            <h3 class="fw-bold mb-1 onek">1k+</h3>
            <p class="text-white mb-0">Projects completed</p>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
          <div class="stat-box text-center p-4">
            <h3 class="fw-bold mb-1 onek">2M+</h3>
            <p class="text-white mb-0">Raised in revenue</p>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
          <div class="stat-box text-center p-4">
            <h3 class="fw-bold mb-1 onek">5+</h3>
            <p class="text-white mb-0">Years of experience</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="blog-section py-5" id="blog">
    <div class="container" style="margin-top: 70px;
    margin-bottom: 70px;
    width: 968px;">
      <h6 class="mb-3" style="text-align: left;color: #808080;">BLOG</h6>

      <!-- Tabs -->
      <ul class="nav nav-tabs border-0 mb-4 custom-tab-wrapper" id="blogTabs" role="tablist" style="margin-top: 50px;">
        <!-- <li class="nav-item" role="presentation">
          <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab1" style="text-align: left;"
            aria-selected="true" role="tab">Design Process</button>
        </li>
        <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab2"
            style="text-align: left;" aria-selected="false" tabindex="-1" role="tab">Ecommerce</button></li>
        <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab3"
            style="text-align: left;" aria-selected="false" tabindex="-1" role="tab">Intranets</button></li>
        <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab4"
            style="text-align: left;" aria-selected="false" tabindex="-1" role="tab">Navigation</button></li>
        <li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab5"
            style="text-align: left;" aria-selected="false" tabindex="-1" role="tab">Research Methods</button></li> -->
      </ul>

      <!-- Tab Content -->
      <div class="tab-content">


        <div class="tab-pane fade show active" id="tab1">
          <!-- Post Card 1 -->
          <div class="blog-card d-flex justify-content-between align-items-start mb-4 pb-4 border-bottom"
            style="margin-top: 30px;">
            <div>
              <h6 class="fw-bold" style="text-align: left;">Stop using Dribbble & Behance to find design inspiration.
                Use these websites instead.</h6>
              <p class="text-muted small" style="text-align: left;">
                Disclaimer: this is a Junior to Junior advice. Ok we can start! — I recently started learning UX/UI...
                Disclaimer: this is a Junior to Junior advice. Ok we can start! — I recently started learning UX/UI...
                Disclaimer: this is a Junior to Junior advice. Ok we can start! — I recently started learning UX/UI...
                Disclaimer: this is a Junior to Junior advice. Ok we can start! — I recently started learning UX/UI...
              </p>
              <div class="d-flex align-items-center text-muted small">
                <i class="bi bi-clock me-2"></i>10 min read
              </div>
            </div>
            <img src="{{ asset('uiuximage.png') }}" class="img-fluid rounded ms-3"
              style="width: 100px; height: 100px; object-fit: cover;" />
          </div>


          <div class="blog-card d-flex justify-content-between align-items-start mb-4 pb-4 border-bottom"
            style="margin-top: 30px;">
            <div>
              <h6 class="fw-bold" style="text-align: left;">Stop using Dribbble & Behance to find design inspiration.
                Use these websites instead.</h6>
              <p class="text-muted small" style="text-align: left;">
                Disclaimer: this is a Junior to Junior advice. Ok we can start! — I recently started learning UX/UI...
                Disclaimer: this is a Junior to Junior advice. Ok we can start! — I recently started learning UX/UI...
                Disclaimer: this is a Junior to Junior advice. Ok we can start! — I recently started learning UX/UI...
                Disclaimer: this is a Junior to Junior advice. Ok we can start! — I recently started learning UX/UI...
              </p>
              <div class="d-flex align-items-center text-muted small">
                <i class="bi bi-clock me-2"></i>10 min read
              </div>
            </div>
            <img src="{{ asset('uiuximage.png') }}" class="img-fluid rounded ms-3"
              style="width: 100px; height: 100px; object-fit: cover;" />
          </div>

          <!-- More blog-card divs can go here -->

          <!-- Pagination -->
          <!-- <nav aria-label="Blog pagination">
            <ul class="pagination justify-content-center">
              <li class="page-item active"><span class="page-link">1</span></li>
              <li class="page-item"><a class="page-link" data-target="">2</a></li>
              <li class="page-item"><a class="page-link" data-target="">3</a></li>
              <li class="page-item"><a class="page-link" data-target="">4</a></li>
            </ul>
          </nav> -->
        </div>

        <!-- Other tabs -->
        <div class="tab-pane fade" id="tab2">Content for Ecommerce</div>
        <div class="tab-pane fade" id="tab3">Content for Intranets</div>
        <div class="tab-pane fade" id="tab4">Content for Navigation</div>
        <div class="tab-pane fade" id="tab5">Content for Research Methods</div>
      </div>
    </div>
  </section>

  <section class="cta-section d-flex flex-column justify-content-center align-items-center text-center text-white">
    <div class="container">
      <h2 class="fw-light mb-4 teamup">Let's team up and make some<br>magic happen!</h2>
      <a href="{{ route('becomeaclient') }}" class="btn btn-outline-purple px-5 py-3 becomeaclient">Become a client</a>
    </div>
  </section>

  <section class="contact-section py-5">
    <div class="container widthControl" style="    margin-top: 120px;
    margin-bottom: 120px;
    width: 62%;
    /* margin: auto; */">
      <div class="row align-items-start">
        <!-- Left: Contact Info -->
        <div class="col-lg-8 mb-4">
          <h2 class="fw-bold gradient-text mb-3" style="text-align: left;">Get<br>in touch</h2>
          <p style="text-align: left;"><a href="mailto:contactpurpleleaf@gmail.com" class="email-link"
              style="text-align: left;">contactpurpleleaf@gmail.com</a></p>
          <p style="text-align: left;">
            <img src="https://img.icons8.com/color/24/000000/whatsapp--v1.png" alt="WhatsApp icon" />
            +880123456789
          </p>
        </div>

        <!-- Right: Links -->
        <div class="col-lg-4" style="margin-top: 119px;">
          <div class="row gx-0">

            <div class="col-6">
              <h5 class="fw-bold text-nowrap" style="text-align: left;font-size: clamp(21px, 2vw, 1.25rem);">Portfolio
              </h5>
              <ul class="list-unstyled mb-0">
                <li><a data-target="" class="small text-decoration-none">Dribbble</a></li>
                <li><a data-target="" class="small text-decoration-none">Behance</a></li>
              </ul>
            </div>

            <div class="col-6 d-flex justify-content-end">
              <div style="min-width: fit-content;">
                <h5 class="fw-bold text-nowrap" style="font-size: clamp(21px, 2vw, 1.25rem);">Social media</h5>
                <ul class="list-unstyled mb-0">
                  <li><a data-target="" class="small text-decoration-none">Linkedin</a></li>
                  <li><a data-target="" class="small text-decoration-none">Facebook</a></li>
                  <li><a data-target="" class="small text-decoration-none">Instagram</a></li>
                </ul>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>








  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>



<div id="cookieConsent" class="cookie-overlay" style="display: none;">
  <div class="cookie-card" id="cookieContent">
    <h3>Cookies</h3>

    <p>
      In a world where creativity flows like a river,
      ideas blossom like flowers in spring. Each thought
      dances in the air, weaving a tapestry of innovation
      and inspiration.
    </p>

    <button id="acceptCookies">Accept</button>

    <a id="cancelCookies">Cancel</a>
  </div>
  <div id="cookieThanks" class="cookie-toast d-none">
    <p>✅ Thank you for accepting cookies!</p>
  </div>

</div>




</html>

<script>

  document.addEventListener("DOMContentLoaded", function () {
    var navbar = document.querySelector('.navbar');
    var heroHeight = document.querySelector('.hero').offsetHeight;

    window.addEventListener('scroll', function () {
      if (window.scrollY > heroHeight - 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
  });


  document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll('.navbar .nav-link');

    navLinks.forEach(link => {
      link.addEventListener('click', function () {
        // Remove 'active' class from all links
        navLinks.forEach(l => l.classList.remove('active'));
        // Add 'active' class to the clicked link
        this.classList.add('active');
      });
    });
  });


  document.addEventListener("DOMContentLoaded", function () {
    const scrollImage = document.querySelector('.clickable-scroll');
    const aboutSection = document.getElementById('about'); // Make sure About section has id="about"

    scrollImage.addEventListener('click', function () {
      aboutSection.scrollIntoView({ behavior: 'smooth' });
    });
  });


</script>



<script>
  $(document).ready(function () {
    // Navbar scroll effect
    var navbar = $('.navbar');
    var heroHeight = $('.hero').height();

    $(window).scroll(function () {
      if ($(window).scrollTop() > heroHeight - 50) {
        navbar.addClass('scrolled');
      } else {
        navbar.removeClass('scrolled');
      }
    });

    // Mobile dropdown functionality with jQuery
    $('.dropdown-toggle').on('click', function (e) {
      if ($(window).width() < 992) {
        e.preventDefault();
        e.stopPropagation();

        var $this = $(this);
        var $dropdownMenu = $this.next('.dropdown-menu');
        var isOpen = $dropdownMenu.hasClass('show');

        // Close all other dropdowns
        $('.dropdown-menu').not($dropdownMenu).removeClass('show');
        $('.dropdown-toggle').not($this).attr('aria-expanded', 'false');

        // Toggle this dropdown
        $dropdownMenu.toggleClass('show');
        $this.attr('aria-expanded', $dropdownMenu.hasClass('show') ? 'true' : 'false');
      }
    });

    // Close dropdown when clicking outside on mobile
    $(document).on('click', function (e) {
      if ($(window).width() < 992) {
        if (!$(e.target).closest('.dropdown').length) {
          $('.dropdown-menu').removeClass('show');
          $('.dropdown-toggle').attr('aria-expanded', 'false');
        }
      }
    });

    // Prevent closing when clicking inside dropdown on mobile
    $('.dropdown-menu').on('click', function (e) {
      if ($(window).width() < 992) {
        e.stopPropagation();
      }
    });

    // Active nav link handling
    $('.navbar .nav-link').on('click', function () {
      $('.navbar .nav-link').removeClass('active');
      $(this).addClass('active');
    });

    // Smooth scroll for clickable image
    $('.clickable-scroll').on('click', function () {
      $('html, body').animate({
        scrollTop: $('#about').offset().top
      }, 800);
    });
  });
</script>


<script>
  const navOverlay = document.getElementById('navOverlay');
  const toggleIcon = document.getElementById('toggleIcon');
  // Select the logo element
  const navLogo = document.querySelector('.navbar-brand');

  const menuIconPath = "http://localhost/purple_leaf_lgf_mix/public/menuIcon.png";
  const closeIconPath = "https://cdn-icons-png.flaticon.com/512/1828/1828778.png";

  function toggleMenu() {
    navOverlay.classList.toggle('active');
    document.body.classList.toggle('no-scroll');

    // Toggle the logo visibility
    navLogo.classList.toggle('logo-hidden');

    if (navOverlay.classList.contains('active')) {
      // Change to Close Icon
      toggleIcon.src = closeIconPath;
      toggleIcon.style.transform = "rotate(90deg)";
      toggleIcon.style.filter = "invert(1)"; // Makes it white
    } else {
      // Back to Menu Icon
      toggleIcon.src = menuIconPath;
      toggleIcon.style.transform = "rotate(0deg)";
      toggleIcon.style.filter = "none"; // Resets to original
    }
  }
</script>

<script>
  const header = document.querySelector('.custom-header');

  function updateHeaderBackground() {
    const isMenuOpen = navOverlay.classList.contains('active');
    const isScrolled = window.scrollY > 50;

    if (isMenuOpen || isScrolled) {
      header.classList.add('header-dark');
    } else {
      header.classList.remove('header-dark');
    }
  }

  // Listen for scrolls
  window.addEventListener('scroll', updateHeaderBackground);

  // Update your existing toggleMenu function to include the check
  function toggleMenu() {
    navOverlay.classList.toggle('active');
    document.body.classList.toggle('no-scroll');
    navLogo.classList.toggle('logo-hidden');

    if (navOverlay.classList.contains('active')) {
      toggleIcon.src = closeIconPath;
      toggleIcon.style.transform = "rotate(90deg)";
      toggleIcon.style.filter = "invert(1)";
    } else {
      toggleIcon.src = menuIconPath;
      toggleIcon.style.transform = "rotate(0deg)";
      toggleIcon.style.filter = "none";
    }

    // IMPORTANT: Call the background check whenever the menu is toggled
    updateHeaderBackground();
  }
</script>



<script>
  document.addEventListener("DOMContentLoaded", function () {

    const popup = document.getElementById('cookieConsent');
    const content = document.getElementById('cookieContent');
    const thanks = document.getElementById('cookieThanks');

    fetch('http://localhost/purple_leaf_lgf_mix/public/cookie-status')
      .then(res => res.json())
      .then(data => {
        if (!data.accepted) {
          popup.style.display = 'block';
        }
      });

    document.getElementById('acceptCookies').addEventListener('click', function () {

      fetch("http://localhost/purple_leaf_lgf_mix/public/cookie-accept", {
        method: "POST",
        headers: {
          "X-CSRF-TOKEN": "{{ csrf_token() }}",
          "Content-Type": "application/json"
        },
        body: JSON.stringify({ accepted: true })
      }).then(() => {
        content.classList.add('d-none');
        thanks.classList.remove('d-none');

        setTimeout(() => {
          popup.style.display = 'none';
        }, 2000);
      });

    });


    document.getElementById('cancelCookies').addEventListener('click', function () {

      popup.style.display = 'none';

    });

  });
</script>





<script>

  document.addEventListener("DOMContentLoaded", function () {

    const navLinks = document.querySelectorAll('.nav-link, .dropdown-item');

    navLinks.forEach(link => {
      link.addEventListener('click', function (e) {
        e.preventDefault(); // Prevent default behavior

        if (this.id === 'projectsDropdown') {
          return; // let Bootstrap handle it
        }

        if (this.classList.contains('dropdown-item')) {
          e.preventDefault(); // stop your custom logic only
          window.location.href = this.getAttribute('href'); // go to route
          return;
        }


        const target = this.getAttribute('data-target');

        // Remove active class from all links
        navLinks.forEach(l => l.classList.remove('active'));
        this.classList.add('active');

        // Handle scrolling to sections (if exists)
        const section = document.getElementById(target);
        if (section) {
          section.scrollIntoView({ behavior: 'smooth' });
        } else {
          // If not a section, navigate to route (example using Laravel route)
          window.location.href = `/${target}`;
        }

        // Close dropdowns on mobile after click
        const dropdowns = document.querySelectorAll('.dropdown-menu.show');
        dropdowns.forEach(d => d.classList.remove('show'));
      });
    });

    // Dropdown toggle for mobile
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
    dropdownToggles.forEach(toggle => {
      toggle.addEventListener('click', function (e) {
        if (window.innerWidth < 992) {
          e.preventDefault();
          const menu = this.nextElementSibling;
          menu.classList.toggle('show');
        }
      });
    });

  });



</script>


<script>
$(document).ready(function () {
    const targetId = sessionStorage.getItem('scrollTarget');

    if (targetId) {
        const target = $('#' + targetId);

        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - 80
            }, 800);
        }

        // clear after use
        sessionStorage.removeItem('scrollTarget');
    }
});
</script>
