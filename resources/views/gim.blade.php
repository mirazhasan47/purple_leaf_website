<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EdLeader21 Case Study</title>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      line-height: 1.6;
      background-color: #ffffff;
      color: #333;
    }

    header {
      background: #eef6fb;
      text-align: center;
      padding: 60px 0px;
    }

    header h1 {
      color: #004f94;
      font-size: 1.2rem;
      margin-top: 10px;
    }

    header .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      max-width: 1200px;
      margin: 0 auto;
      width: 70%;
      margin-top: 50px;
    }

    header .left-column {
      display: flex;
      flex-direction: column;
      align-items: center;
      max-width: 50%;
    }

    header .left-column .top-image {
      max-width: 100%;
      margin-bottom: 20px;
    }

    header .left-column .text {
      text-align: center;
    }

    header .right-column {
      max-width: 50%;
    }

    header .right-column img {
      max-width: 100%;
    }

    section {
      padding: 60px 20px;
    }

    .center {
      text-align: center;
    }

    .info {
      background: #f9f9f9;
      padding: 40px 20px;
      text-align: center;
    }

    .columns {
      display: flex;
      flex-wrap: wrap;
      gap: 40px;
      justify-content: center;
      margin-top: 90px;
      margin-bottom: 90px;
    }

    .column {
      flex: 1 1 300px;
      max-width: 500px;
    }

    h2,
    h3,
    h4 {
      color: #222;
      margin-bottom: 16px;
    }

    ul {
      list-style: none;
      padding-left: 0;
    }

    .image-block {
      text-align: center;
      margin-top: 30px;
    }

    .image-block img {
      max-width: 90%;
      margin: 10px auto;
      display: block;
    }

    .personas {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 40px;
    }

    .persona-card {
      text-align: center;
      max-width: 200px;
    }

    .persona-card img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
    }

    .footer {
      background: #f1f1f1;
      padding: 40px 20px;
      text-align: center;
      color: #666;
    }

    .footer h3 {
      color: #8e44ec;
      font-size: 1.8rem;
      margin-bottom: 10px;
    }

    .footer a {
      color: #333;
      text-decoration: none;
    }

    .footer .links {
      display: flex;
      justify-content: center;
      gap: 60px;
      margin-top: 20px;
    }

    .footer ul {
      list-style: none;
      padding: 0;
    }

    .footer li {
      margin-bottom: 8px;
    }

    .btn-download {
      background-color: #5f3dc4;
      color: white;
      padding: 10px 20px;
      border: none;
      text-decoration: none;
      border-radius: 5px;
      display: inline-block;
      margin-top: 14%;
      width: 100%;
    }

    /* Added background color for Interview Results and next sections */
    .interview-results,
    .personas,
    .journey-map,
    .design-solution {
      background-color: #eef6fb;
      padding: 40px 20px;
    }

    header .left-column {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      /* Align content to the left */
      text-align: left;
      /* Ensure text aligns left */
    }

    header .left-column .top-image {
      margin-bottom: 20px;
      display: block;
    }

    section.center {
      margin: 0 10%;
      /* 10% horizontal margin on left and right */
    }

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

    .text-left {
      text-align: left;
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
        align-items: center;
      }

      header .left-column,
      header .right-column {
        max-width: 100%;
      }

      .user-research-container {
        flex-direction: column;
        align-items: center;
      }

      .left-column,
      .right-column {
        width: 100%;
        text-align: center;
      }

      .left-column .header,
      .left-column .subheader {
        margin-bottom: 20px;
      }

      .right-column p {
        font-size: 1rem;
      }
    }






























    /* Load Poppins font */
    @font-face {
      font-family: 'Poppins';
      src: url('{{ asset("Poppins-ExtraLight.ttf") }}') format('truetype');
      font-weight: 400;
      font-style: normal;
    }

    @font-face {
      font-family: 'Mntserrat_regularo';
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
      background-color: #000000 !important;
    }

    .navbar.scrolled {
      background-color: #000000 !important;
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
      max-width: 88% !important;
    }

    .container h1 {
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
      font-style: unset;
      font-size: 72px;
      margin: 0;
      background: linear-gradient(141deg, #ffffff, #ffffff, #ffffff);
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

    .mont {
      font-family: 'Mntserrat_regularo' !important;
    }

    .mont_bold_seven {
      font-family: 'Montserrat_bold' !important;
      font-weight: 700 !important;
    }

    .mont_bold_seven_sixteen {
      font-family: 'Montserrat_bold' !important;
      font-weight: 700 !important;
      font-size: 16px !important;
    }

    .mont_bold_six {
      font-family: 'Montserrat_bold' !important;
      font-weight: 600 !important;
    }

    .mont_bold_six_twenty_four {
      font-family: 'Montserrat_bold' !important;
      font-weight: 600 !important;
      font-size: 24px !important;
    }

    .mont_regular_three {
      font-family: 'Montserrat_bold' !important;
      font-weight: 600 !important;
    }

    .mont_regular_five_twenty {
      font-family: 'Mntserrat_regularo' !important;
      font-weight: 500 !important;
      font-size: 20px!important;
    }

    .karla_regular_three {
      font-family: 'KarlaRegular';
      font-weight: 300 !important;
    }

    .karla_regular_three_eighteen {
      font-family: 'KarlaRegular';
      font-weight: 300 !important;
      font-size: 18px !important;
    }

    .karla_regular_four_sixteen {
      font-family: 'KarlaRegular';
      font-weight: 300 !important;
      font-size: 16px;
    }

    .mont_bold_six_sixteen {
      font-family: 'Montserrat_bold' !important;
      font-weight: 600 !important;
      font-size: 16px !important;
    }

    .mont_regular_three_sixteen {
      font-family: 'Mntserrat_regularo' !important;
      font-weight: 300 !important;
      font-size: 16px !important;
    }

    .mont_bold_seven_eightteen {
      font-family: 'Montserrat_bold' !important;
      font-weight: 700 !important;
      font-size: 18px !important;
    }

    .mont_bold_seven_sixteen {
      font-family: 'Montserrat_bold' !important;
      font-weight: 700 !important;
      font-size: 18px !important;
    }

    .karla_regular_three_sixteen {
      font-family: 'KarlaRegular';
      font-weight: 300 !important;
      font-size: 16px !important;
    }


    header {
      background: url('http://localhost/purple_leaf/public/HeroNewOne.png') no-repeat center center;
      background-size: cover;
      text-align: center;
      padding: 60px 20px;
    }
  </style>
</head>

<body>

  <header class="custom-header">
    <a class="navbar-brand" href="#">
      <img src="http://localhost/purple_leaf/public/LogoOne.png" alt="Logo">
    </a>

    <button class="menu-toggle" onclick="toggleMenu()">
      <img id="toggleIcon" src="http://localhost/purple_leaf/public/menuIcon.png" alt="Menu">
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
      <a class="navbar-brand" href="#">
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
          <a class="nav-link dropdown-toggle" href="#" id="projectsDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Projects
          </a>
          <ul class="dropdown-menu" aria-labelledby="projectsDropdown">
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
            <li><a class="dropdown-item" href="{{ route('dotline') }}">DOTONLINE BULK SMS</a></li>
            <li><a class="dropdown-item" href="{{ route('karighor') }}">KARCHER</a></li>
            <li><a class="dropdown-item" href="{{ route('eskimi') }}">ESHIN</a></li>
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

  <!-- Header -->
  <header>
    <div class="container heroo" style="display: flex; justify-content: space-between; align-items: center;">
      <!-- Left Column: Image + Text -->
      <div class="left-column">
        <img src="{{ asset('ecomm_top_left.png') }}" alt="Small Mobile Mockup" class="top-image" />
        <div class="text">
          <h1 class="mont" style="text-align: left;
    width: 72%;
    font-size: 18px;
    color: #1F455D!important;
    font-weight: 400;">Imagine a place where people can communicate in the real world and inhabit the metaverse</h1>
        </div>
      </div>

      <!-- Right Column: Large Image -->
      <div class="right-column">
        <img src="{{ asset('ecomm_top_photo_top.png') }}" alt="Large Mobile Mockup" />
      </div>
    </div>
  </header>

  <!-- Project Info -->
  <section class="container py-5" style="width: 65%;">
    <h3 class="mont_bold_seven" style="    text-align: center;
    font-size: 20px;
    margin-bottom: 42px;">Project Info</h3>
    <div class="row text-center">
      <!-- Project 1 -->
      <div class="col-md-4 mb-4">
        <div class="d-flex justify-content-center gap-2">
          <strong class="mont_bold_six_sixteen">Client:</strong>
          <span class="mont_regular_three_sixteen">Commchat
            Messenger</span>
        </div>
      </div>

      <!-- Project 2 -->
      <div class="col-md-4 mb-4">
        <div class="d-flex justify-content-center gap-2">
          <strong class="mont_bold_six_sixteen">Deliverables:</strong>
          <span class="mont_regular_three_sixteen">Mobile App, Web App
            Desktop App</span>
        </div>
      </div>

      <!-- Project 3 -->
      <div class="col-md-4 mb-4">
        <div class="d-flex justify-content-center gap-2">
          <strong class="mont_bold_six_sixteen">Sector:</strong>
          <span class="mont_regular_three_sixteen">Android, iOS
            MacOS, Windows
            Linux</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Problem and Goals -->
  <section class="info" style="    width: 85%;
    margin: 0 auto;">
    <div class="columns">
      <div class="column text-left">
        <h3 class="mont_bold_six_twenty_four">The Problem</h3>
        <p class="karla_regular_three_sixteen">Millions of people are concerned about the risk of their personal information getting leaked or privacy being violated. The assurance of secure protection offered by many platforms has proven to be inadequate. CommChat offered a solution to this problem, allowing people to communicate with complete privacy and security on a trustworthy platform online.</p>
      </div>
      <div class="column text-left">
        <h3 class="mont_bold_six_twenty_four">Overview</h3>
        <p class="karla_regular_three_sixteen">The CommChat system is an interface used primarily for user-to-user communication in the real world. It’s also used to interact with the inhabitants of the digital universe. Users may quickly jump in and out between these two realities depending on their needs.- paraphrase it</p>
      </div>
    </div>
  </section>

  <section class="info" style="    width: 85%;
    margin: 0 auto;">
    <div class="columns">
      <div class="column text-left">
        <div class="header">
          <h3 class="mont_bold_six_twenty_four">User</h3>
        </div>
        <div class="subheader">
          <p class="mont_regular_three_sixteen" style="font-size: 20px;">Research</p>
        </div>
      </div>
      <div class="column text-left">
        <p class="karla_regular_three_sixteen">Interviews were conducted with metaverse users to gain deeper insights into their communication needs and preferences within the virtual world. The interviews were conducted one-on-one and lasted approximately 30-45 minutes each. The following topics were covered in the interviews:
</p>
      </div>
    </div>
  </section>

  <h4 class="text-center mont_bold_seven_sixteen">1. QUESTIONNAIRE</h4>
  <section class="interview-results" style="width: 50%;
    margin: 0 auto;
    margin-top: 100px;
    margin-bottom: 100px;">
    <div class="center">
      <div class="image-block">
        <img src="{{ asset('ecommfirstBig.png') }}" alt="Survey Results" class="img-fluid" />
      </div>
    </div>
  </section>

  <!-- User Personas -->
  <h4 class="text-center mont_bold_seven_sixteen">2. User Testing</h4>
  <section class="personas" style="width: 50%;
    margin: 0 auto;
    margin-top: 100px;
    margin-bottom: 100px;">
    <div class="center">
      <div class="image-block">
        <img src="{{ asset('user_testing.png') }}" alt="User Persona" class="img-fluid" />
      </div>
    </div>
  </section>

  <!-- Design Solution -->
  <h4 class="text-center mont_bold_seven_eightteen">🧩 Design Solution</h4>
<p class="text-center karla_regular_four_sixteen"
   style="width:50%; margin:0 auto; text-align:left!important; display:flex; align-items:center;">
  
  <span style="color:#5A2CEA; font-weight:700; font-size:33px; margin-right:8px;">
    *
  </span>

  <span class="mont_regular_five_twenty" style="margin-bottom: 13px;">
    Mobile App
  </span>

</p>
  <section class="design-solution" style="width: 50%;
    margin: 0 auto;
    margin-top: 20px;
    margin-bottom: 100px;">
    <p class="text-center karla_regular_four_sixteen" style="width: 55%;
    margin: 0 auto;"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd"
          d="M5.40875 8.5905V14H8.59056V8.59049H14V5.40868L8.59056 5.40868V0H5.40875V5.40868L0 5.40868V8.5905H5.40875Z"
          fill="#333034" />
      </svg> EdLeader 21 app offers light and dark modes. Dark mode is easier on the eyes in low light and reduces
      battery usage.</p>

    <div class="center">
      <div class="image-block">
        <img src="{{ asset('edleader_image_6.png') }}" alt="Final Design Mockup" class="img-fluid" />
      </div>
    </div>
  </section>



  <p class="text-center karla_regular_four_sixteen"
   style="width:50%; margin:0 auto; text-align:left!important; display:flex; align-items:center;">
  
  <span style="color:#5A2CEA; font-weight:700; font-size:33px; margin-right:8px;">
    *
  </span>

  <span class="mont_regular_five_twenty" style="margin-bottom: 13px;">
    Web App
  </span>

</p>
  <section class="design-solution" style="width: 50%;
    margin: 0 auto;
    margin-top: 20px;
    margin-bottom: 100px;">
    <p class="text-center karla_regular_four_sixteen" style="width: 55%;
    margin: 0 auto;"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd"
          d="M5.40875 8.5905V14H8.59056V8.59049H14V5.40868L8.59056 5.40868V0H5.40875V5.40868L0 5.40868V8.5905H5.40875Z"
          fill="#333034" />
      </svg> EdLeader 21 app offers light and dark modes. Dark mode is easier on the eyes in low light and reduces
      battery usage.</p>

    <div class="center">
      <div class="image-block">
        <img src="{{ asset('ecommThirdBig.png') }}" alt="Final Design Mockup" class="img-fluid" />
      </div>
    </div>
  </section>

  <div style="width: 50%;
    margin: 0 auto;text-align: center;"><svg xmlns="http://www.w3.org/2000/svg" width="202" height="29"
      viewBox="0 0 202 29" fill="none">
      <path
        d="M72.9727 15.9023C73.8011 15.9023 74.4727 15.2308 74.4727 14.4023C74.4727 13.5739 73.8011 12.9023 72.9727 12.9023V15.9023ZM72.9727 12.9023H3.88453V15.9023H72.9727V12.9023Z"
        fill="#B5B5B5" />
      <path d="M15.3984 26.8008L2.998 14.4003L15.3984 1.99991" stroke="#B5B5B5" stroke-width="3"
        stroke-linecap="round" />
      <path
        d="M129.66 12.9023C128.832 12.9023 128.16 13.5739 128.16 14.4023C128.16 15.2308 128.832 15.9023 129.66 15.9023L129.66 12.9023ZM129.66 15.9023L198.748 15.9023L198.748 12.9023L129.66 12.9023L129.66 15.9023Z"
        fill="#383838" />
      <path d="M187.234 2.00391L199.635 14.4043L187.234 26.8048" stroke="#383838" stroke-width="3"
        stroke-linecap="round" />
    </svg></div>

  <!-- Key Takeaways -->
  <section class="info center" style="width: 50%;
    margin: 0 auto;
    margin-top: 100px;
    margin-bottom: 50px;
    background: none;">
    <h4 class="mont_bold_seven_sixteen" style="margin-bottom: 14%;">Evaluation</h4>
    <p class="karla_regular_three_eighteen" style="text-align: left;">The messaging app was tested with a group of users, who reported that it was easy to use and met their needs for fast and accessible communication. The app's simple and intuitive design was well-received, and users appreciated the ability to send multimedia messages and initiate voice and video calls from within the app.
</p>
  </section>

    <section class="info center" style="width: 50%;
    margin: 0 auto;
    margin-top: 0px;
    margin-bottom: 100px;
    background: none;">
    <h4 class="mont_bold_seven_sixteen" style="margin-bottom: 14%;">Conclusion</h4>
    <p class="karla_regular_three_eighteen" style="text-align: left;">The Commchat messaging app provides a seamless communication experience for users in the virtual world. Its minimalist design and support for text and multimedia messages make it easy for users to connect and communicate with others in real life and also in the metaverse. With features such as group messaging and voice and video calls, the app meets the needs of users and provides a platform for secure and private conversations.</p>
    <a href="#" class="btn-download mont_bold_seven_sixteen">Download PDF</a>
  </section>

  <!-- Footer -->
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
                <li><a href="#" class="small text-decoration-none">Dribbble</a></li>
                <li><a href="#" class="small text-decoration-none">Behance</a></li>
              </ul>
            </div>

            <div class="col-6 d-flex justify-content-end">
              <div style="min-width: fit-content;">
                <h5 class="fw-bold text-nowrap" style="font-size: clamp(21px, 2vw, 1.25rem);">Social media</h5>
                <ul class="list-unstyled mb-0">
                  <li><a href="#" class="small text-decoration-none">Linkedin</a></li>
                  <li><a href="#" class="small text-decoration-none">Facebook</a></li>
                  <li><a href="#" class="small text-decoration-none">Instagram</a></li>
                </ul>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>



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
    var navbar = document.querySelector('.navbar');
    var heroHeight = document.querySelector('.heroo').offsetHeight;

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

</script>

<script>
  $(document).on('click', '.nav-link[data-target]', function (e) {
    e.preventDefault();

    const target = $(this).data('target');

    // save target without using hash
    sessionStorage.setItem('scrollTarget', target);

    // redirect to page
    window.location.href = 'purple_leaf'; // change page if needed
  });
</script>