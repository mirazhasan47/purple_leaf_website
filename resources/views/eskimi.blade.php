<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>EdLeader21 Case Study</title>
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
    background: url('http://localhost/myLaravelApp/public/eskimiBanner.png') no-repeat center center;
    background-size: cover;
    text-align: center;
    padding: 16% 20px;
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
    h2, h3, h4 {
      color: #222;
      margin-bottom: 16px;
    }
    ul {
      list-style: none;
      padding-left: 0;
    }
    ul li::before {
      content: "✔ ";
      color: green;
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
    .interview-results, .personas, .journey-map, .design-solution {
      background-color: #eef6fb;
      padding: 40px 20px;
    }

    header .left-column {
  display: flex;
  flex-direction: column;
  align-items: flex-start; /* Align content to the left */
  text-align: left;        /* Ensure text aligns left */
}

header .left-column .top-image {
  margin-bottom: 20px;
  display: block;
}

section.center {
  margin: 0 10%; /* 10% horizontal margin on left and right */
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
  text-align:left;
}
    @media (max-width: 768px) {
      .container {
        flex-direction: column;
        align-items: center;
      }
      header .left-column, header .right-column {
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
  </style>
</head>
<body>

  <!-- Header -->
<header>
  <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
    <!-- Left Column: Image + Text -->
    <div class="left-column">
<h4></h4>
        <div class="text">
        <h1 style="text-align: left;
    width: 72%;"></h1>
      </div>
    </div>

    <!-- Right Column: Large Image -->
    <div class="right-column">
    </div>
  </div>
</header>

  <!-- Project Info -->
<section class="container py-5" style="width: 40%;">
        <h3 style="    text-align: center;
    font-size: 20px;
    margin-bottom: 42px;">Project Info</h3>
  <div class="row text-center">
    <!-- Project 1 -->
    <div class="col-md-4 mb-4">
      <p>
        <strong>Client:</strong> EdLeader 21
      </p>
    </div>

    <!-- Project 2 -->
    <div class="col-md-4 mb-4">
      <p>
        <strong>Deliverables:</strong> Web App

      </p>
    </div>

    <!-- Project 3 -->
    <div class="col-md-4 mb-4">
      <p>
        <strong>Sector:</strong> Education
      </p>
    </div>
  </div>
</section>

  <!-- Problem and Goals -->
<section class="info">
  <div class="columns">
    <div class="column text-left">
      <h3>The Problem</h3>
      <p>Users were overwhelmed by the scattered content & needed a more seamless and centralized tool for networking and leadership growth among educators.</p>
    </div>
    <div class="column text-left">
      <h3>Goals</h3>
      <p>            In order to gain a deeper understanding of our client’s problem and close the knowledge gap regarding its stakeholders and broader product strategy, we conducted interviews with superintendents, educators, and leaders. Based on the insights we found, we prepared user personas and a user journey map.
</p>
    </div>
  </div>
</section>


<section class="info">
  <div class="columns">
    <div class="column text-left">
      <h3>Goals</h3>
      <p>Users were overwhelmed by the scattered content & needed a more seamless and centralized tool for networking and leadership growth among educators.</p>
    </div>
    <div class="column text-left">
      <ol>
        <li>Connect colleagues across the nation.</li>
        <li>Keep educators up to date about upcoming events.</li>
        <li>Ensure access to contacts of educators and leaders.</li>
        <li>Build a community of school systems that can grow together.</li>
      </ol>
    </div>
  </div>
</section>


<h4 class="text-center">1. USER RESEARCH</h4>
<section class="interview-results" style="width: 50%;
    margin: 0 auto;
    margin-top: 100px;
    margin-bottom: 100px;">
  <div class="center">
    <div class="image-block">
      <img src="{{ asset('eskimiBigImageOne.png') }}" alt="Survey Results" class="img-fluid" />
    </div>
  </div>
</section>

<!-- User Personas -->
<section class="personas" style="width: 50%;
    margin: 0 auto;
    margin-top: 100px;
    margin-bottom: 100px;">
  <div class="center">
    <div class="image-block">
      <img src="{{ asset('eskimiBigImageTwo.png') }}" alt="User Persona" class="img-fluid" />
    </div>
  </div>
</section>

<!-- Journey Map -->
<section class="info">
  <div class="columns">
    <div class="column text-left">
      <h3>Goals</h3>
      <p>Users were overwhelmed by the scattered content & needed a more seamless and centralized tool for networking and leadership growth among educators.</p>
    </div>
    <div class="column text-left">
      <ol>
        <li>Connect colleagues across the nation.</li>
        <li>Keep educators up to date about upcoming events.</li>
        <li>Ensure access to contacts of educators and leaders.</li>
        <li>Build a community of school systems that can grow together.</li>
      </ol>
    </div>
  </div>
</section>

<!-- Design Solution -->
<h4 class="text-center">🧩 Design Solution</h4>
<section class="design-solution" style="width: 50%;
    margin: 0 auto;
    margin-top: 100px;
    margin-bottom: 100px;">
    <p class="text-center" style="width: 55%;
    margin: 0 auto;"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
<path fill-rule="evenodd" clip-rule="evenodd" d="M5.40875 8.5905V14H8.59056V8.59049H14V5.40868L8.59056 5.40868V0H5.40875V5.40868L0 5.40868V8.5905H5.40875Z" fill="#333034"/>
</svg> EdLeader 21 app offers light and dark modes. Dark mode is easier on the eyes in low light and reduces battery usage.</p>

  <div class="center">
    <div class="image-block">
      <img src="{{ asset('eskimiBigImageThree.png') }}" alt="Final Design Mockup" class="img-fluid" />
    </div>
  </div>
</section>

<div style="width: 50%;
    margin: 0 auto;text-align: center;"><svg xmlns="http://www.w3.org/2000/svg" width="382" height="12" viewBox="0 0 382 12" fill="none">
<path d="M5.346 11.966C4.458 11.966 3.681 11.75 3.015 11.318C2.355 10.886 1.839 10.235 1.467 9.365C1.101 8.495 0.918 7.406 0.918 6.098C0.918 4.79 1.101 3.704 1.467 2.84C1.839 1.97 2.355 1.322 3.015 0.895999C3.681 0.463999 4.458 0.247999 5.346 0.247999C6.228 0.247999 7.002 0.463999 7.668 0.895999C8.334 1.322 8.85 1.97 9.216 2.84C9.588 3.704 9.774 4.79 9.774 6.098C9.774 7.406 9.588 8.495 9.216 9.365C8.85 10.235 8.334 10.886 7.668 11.318C7.002 11.75 6.228 11.966 5.346 11.966ZM5.346 10.67C6.318 10.67 7.056 10.274 7.56 9.482C8.064 8.684 8.316 7.556 8.316 6.098C8.316 4.64 8.064 3.515 7.56 2.723C7.056 1.925 6.318 1.526 5.346 1.526C4.386 1.526 3.651 1.925 3.141 2.723C2.631 3.515 2.376 4.64 2.376 6.098C2.376 7.556 2.631 8.684 3.141 9.482C3.651 10.274 4.386 10.67 5.346 10.67ZM13.6755 0.409999H14.8095V11.75H13.4055V2.066C13.1175 2.264 12.8145 2.417 12.4965 2.525C12.1845 2.627 11.8695 2.684 11.5515 2.696V1.328C11.9295 1.274 12.2955 1.175 12.6495 1.031C13.0095 0.886999 13.3515 0.679999 13.6755 0.409999Z" fill="#2C2C2C"/>
<path d="M46.346 11.966C45.458 11.966 44.681 11.75 44.015 11.318C43.355 10.886 42.839 10.235 42.467 9.365C42.101 8.495 41.918 7.406 41.918 6.098C41.918 4.79 42.101 3.704 42.467 2.84C42.839 1.97 43.355 1.322 44.015 0.895999C44.681 0.463999 45.458 0.247999 46.346 0.247999C47.228 0.247999 48.002 0.463999 48.668 0.895999C49.334 1.322 49.85 1.97 50.216 2.84C50.588 3.704 50.774 4.79 50.774 6.098C50.774 7.406 50.588 8.495 50.216 9.365C49.85 10.235 49.334 10.886 48.668 11.318C48.002 11.75 47.228 11.966 46.346 11.966ZM46.346 10.67C47.318 10.67 48.056 10.274 48.56 9.482C49.064 8.684 49.316 7.556 49.316 6.098C49.316 4.64 49.064 3.515 48.56 2.723C48.056 1.925 47.318 1.526 46.346 1.526C45.386 1.526 44.651 1.925 44.141 2.723C43.631 3.515 43.376 4.64 43.376 6.098C43.376 7.556 43.631 8.684 44.141 9.482C44.651 10.274 45.386 10.67 46.346 10.67ZM52.8395 11.75V10.076C52.8395 9.422 52.9445 8.876 53.1545 8.438C53.3705 8 53.6705 7.637 54.0545 7.349C54.4445 7.061 54.9035 6.812 55.4315 6.602L57.6635 5.72C58.2395 5.486 58.6715 5.186 58.9595 4.82C59.2475 4.454 59.3915 3.998 59.3915 3.452C59.3915 2.876 59.1905 2.405 58.7885 2.039C58.3925 1.673 57.8375 1.49 57.1235 1.49C56.4155 1.49 55.8335 1.643 55.3775 1.949C54.9275 2.249 54.6695 2.702 54.6035 3.308H53.0375C53.0795 2.654 53.2715 2.099 53.6135 1.643C53.9615 1.187 54.4325 0.842 55.0265 0.608C55.6205 0.367999 56.3135 0.247999 57.1055 0.247999C57.8315 0.247999 58.4825 0.388999 59.0585 0.670999C59.6345 0.953 60.0875 1.343 60.4175 1.841C60.7535 2.333 60.9215 2.9 60.9215 3.542C60.9215 4.124 60.8135 4.631 60.5975 5.063C60.3815 5.495 60.0725 5.867 59.6705 6.179C59.2745 6.491 58.8035 6.758 58.2575 6.98L55.9715 7.898C55.3955 8.12 54.9635 8.387 54.6755 8.699C54.3875 9.011 54.2435 9.416 54.2435 9.914V10.454H60.8135V11.75H52.8395Z" fill="#2C2C2C"/>
<path d="M86 6.25H202" stroke="#2C2C2C" stroke-width="2"/>
<path d="M230.346 11.966C229.458 11.966 228.681 11.75 228.015 11.318C227.355 10.886 226.839 10.235 226.467 9.365C226.101 8.495 225.918 7.406 225.918 6.098C225.918 4.79 226.101 3.704 226.467 2.84C226.839 1.97 227.355 1.322 228.015 0.895999C228.681 0.463999 229.458 0.247999 230.346 0.247999C231.228 0.247999 232.002 0.463999 232.668 0.895999C233.334 1.322 233.85 1.97 234.216 2.84C234.588 3.704 234.774 4.79 234.774 6.098C234.774 7.406 234.588 8.495 234.216 9.365C233.85 10.235 233.334 10.886 232.668 11.318C232.002 11.75 231.228 11.966 230.346 11.966ZM230.346 10.67C231.318 10.67 232.056 10.274 232.56 9.482C233.064 8.684 233.316 7.556 233.316 6.098C233.316 4.64 233.064 3.515 232.56 2.723C232.056 1.925 231.318 1.526 230.346 1.526C229.386 1.526 228.651 1.925 228.141 2.723C227.631 3.515 227.376 4.64 227.376 6.098C227.376 7.556 227.631 8.684 228.141 9.482C228.651 10.274 229.386 10.67 230.346 10.67ZM241.034 11.966C240.47 11.966 239.924 11.888 239.396 11.732C238.874 11.57 238.403 11.336 237.983 11.03C237.569 10.718 237.242 10.334 237.002 9.878C236.762 9.422 236.642 8.894 236.642 8.294H238.082C238.094 8.81 238.232 9.245 238.496 9.599C238.76 9.953 239.111 10.22 239.549 10.4C239.993 10.58 240.488 10.67 241.034 10.67C241.874 10.67 242.525 10.466 242.987 10.058C243.449 9.65 243.68 9.14 243.68 8.528C243.68 8.138 243.584 7.793 243.392 7.493C243.2 7.193 242.894 6.959 242.474 6.791C242.06 6.617 241.514 6.53 240.836 6.53H239.558V5.414H240.422C241.298 5.414 241.988 5.24 242.492 4.892C242.996 4.544 243.248 4.064 243.248 3.452C243.248 2.912 243.044 2.456 242.636 2.084C242.228 1.712 241.646 1.526 240.89 1.526C240.308 1.526 239.789 1.646 239.333 1.886C238.877 2.12 238.568 2.552 238.406 3.182H236.966C237.062 2.48 237.29 1.913 237.65 1.481C238.01 1.049 238.466 0.737 239.018 0.545C239.57 0.346999 240.182 0.247999 240.854 0.247999C241.604 0.247999 242.273 0.379999 242.861 0.643999C243.449 0.907999 243.911 1.271 244.247 1.733C244.589 2.195 244.76 2.726 244.76 3.326C244.76 3.92 244.589 4.43 244.247 4.856C243.911 5.276 243.422 5.6 242.78 5.828C243.494 6.032 244.076 6.368 244.526 6.836C244.982 7.304 245.21 7.904 245.21 8.636C245.21 9.284 245.039 9.86 244.697 10.364C244.361 10.862 243.881 11.255 243.257 11.543C242.633 11.825 241.892 11.966 241.034 11.966Z" fill="#ABABAB"/>
<path d="M276.346 11.966C275.458 11.966 274.681 11.75 274.015 11.318C273.355 10.886 272.839 10.235 272.467 9.365C272.101 8.495 271.918 7.406 271.918 6.098C271.918 4.79 272.101 3.704 272.467 2.84C272.839 1.97 273.355 1.322 274.015 0.895999C274.681 0.463999 275.458 0.247999 276.346 0.247999C277.228 0.247999 278.002 0.463999 278.668 0.895999C279.334 1.322 279.85 1.97 280.216 2.84C280.588 3.704 280.774 4.79 280.774 6.098C280.774 7.406 280.588 8.495 280.216 9.365C279.85 10.235 279.334 10.886 278.668 11.318C278.002 11.75 277.228 11.966 276.346 11.966ZM276.346 10.67C277.318 10.67 278.056 10.274 278.56 9.482C279.064 8.684 279.316 7.556 279.316 6.098C279.316 4.64 279.064 3.515 278.56 2.723C278.056 1.925 277.318 1.526 276.346 1.526C275.386 1.526 274.651 1.925 274.141 2.723C273.631 3.515 273.376 4.64 273.376 6.098C273.376 7.556 273.631 8.684 274.141 9.482C274.651 10.274 275.386 10.67 276.346 10.67ZM288.078 0.284H289.392V7.808H291.354V8.996H289.392V11.75H288.006V8.996H282.156V7.916L288.078 0.284ZM288.06 2.498L283.83 7.916H288.06V2.498Z" fill="#ABABAB"/>
<path d="M321.346 11.966C320.458 11.966 319.681 11.75 319.015 11.318C318.355 10.886 317.839 10.235 317.467 9.365C317.101 8.495 316.918 7.406 316.918 6.098C316.918 4.79 317.101 3.704 317.467 2.84C317.839 1.97 318.355 1.322 319.015 0.895999C319.681 0.463999 320.458 0.247999 321.346 0.247999C322.228 0.247999 323.002 0.463999 323.668 0.895999C324.334 1.322 324.85 1.97 325.216 2.84C325.588 3.704 325.774 4.79 325.774 6.098C325.774 7.406 325.588 8.495 325.216 9.365C324.85 10.235 324.334 10.886 323.668 11.318C323.002 11.75 322.228 11.966 321.346 11.966ZM321.346 10.67C322.318 10.67 323.056 10.274 323.56 9.482C324.064 8.684 324.316 7.556 324.316 6.098C324.316 4.64 324.064 3.515 323.56 2.723C323.056 1.925 322.318 1.526 321.346 1.526C320.386 1.526 319.651 1.925 319.141 2.723C318.631 3.515 318.376 4.64 318.376 6.098C318.376 7.556 318.631 8.684 319.141 9.482C319.651 10.274 320.386 10.67 321.346 10.67ZM331.764 11.966C331.05 11.966 330.399 11.837 329.811 11.579C329.223 11.321 328.752 10.943 328.398 10.445C328.044 9.941 327.864 9.326 327.858 8.6H329.262C329.262 9.284 329.502 9.8 329.982 10.148C330.468 10.496 331.062 10.67 331.764 10.67C332.574 10.67 333.21 10.424 333.672 9.932C334.14 9.434 334.374 8.822 334.374 8.096C334.374 6.644 333.438 5.918 331.566 5.918H328.542L329.028 0.446H335.292V1.724H330.162L330.45 1.238L330.072 5.18L329.892 5.018C330.18 4.952 330.507 4.907 330.873 4.883C331.239 4.853 331.566 4.838 331.854 4.838C333.078 4.838 334.047 5.111 334.761 5.657C335.475 6.203 335.832 7.016 335.832 8.096C335.832 8.828 335.667 9.488 335.337 10.076C335.007 10.658 334.536 11.12 333.924 11.462C333.318 11.798 332.598 11.966 331.764 11.966Z" fill="#ABABAB"/>
<path d="M366.346 11.966C365.458 11.966 364.681 11.75 364.015 11.318C363.355 10.886 362.839 10.235 362.467 9.365C362.101 8.495 361.918 7.406 361.918 6.098C361.918 4.79 362.101 3.704 362.467 2.84C362.839 1.97 363.355 1.322 364.015 0.895999C364.681 0.463999 365.458 0.247999 366.346 0.247999C367.228 0.247999 368.002 0.463999 368.668 0.895999C369.334 1.322 369.85 1.97 370.216 2.84C370.588 3.704 370.774 4.79 370.774 6.098C370.774 7.406 370.588 8.495 370.216 9.365C369.85 10.235 369.334 10.886 368.668 11.318C368.002 11.75 367.228 11.966 366.346 11.966ZM366.346 10.67C367.318 10.67 368.056 10.274 368.56 9.482C369.064 8.684 369.316 7.556 369.316 6.098C369.316 4.64 369.064 3.515 368.56 2.723C368.056 1.925 367.318 1.526 366.346 1.526C365.386 1.526 364.651 1.925 364.141 2.723C363.631 3.515 363.376 4.64 363.376 6.098C363.376 7.556 363.631 8.684 364.141 9.482C364.651 10.274 365.386 10.67 366.346 10.67ZM377.106 11.966C376.2 11.966 375.408 11.717 374.73 11.219C374.058 10.721 373.536 10.046 373.164 9.194C372.792 8.336 372.606 7.37 372.606 6.296C372.606 5.03 372.795 3.947 373.173 3.047C373.551 2.141 374.091 1.448 374.793 0.967999C375.495 0.487999 376.332 0.247999 377.304 0.247999C377.976 0.247999 378.567 0.376999 379.077 0.635C379.593 0.886999 380.004 1.241 380.31 1.697C380.622 2.153 380.808 2.684 380.868 3.29H379.338C379.248 2.75 379.044 2.321 378.726 2.003C378.408 1.685 377.946 1.526 377.34 1.526C376.308 1.526 375.498 1.973 374.91 2.867C374.322 3.755 374.028 4.97 374.028 6.512C374.028 6.734 374.034 6.992 374.046 7.286C374.058 7.574 374.082 7.844 374.118 8.096C374.172 7.298 374.355 6.671 374.667 6.215C374.985 5.753 375.381 5.426 375.855 5.234C376.329 5.042 376.83 4.946 377.358 4.946C378.042 4.946 378.654 5.096 379.194 5.396C379.74 5.696 380.169 6.113 380.481 6.647C380.799 7.175 380.958 7.784 380.958 8.474C380.958 9.17 380.796 9.782 380.472 10.31C380.148 10.832 379.695 11.24 379.113 11.534C378.537 11.822 377.868 11.966 377.106 11.966ZM377.106 10.67C377.79 10.67 378.357 10.469 378.807 10.067C379.257 9.665 379.482 9.122 379.482 8.438C379.482 7.736 379.257 7.187 378.807 6.791C378.357 6.389 377.79 6.188 377.106 6.188C376.656 6.188 376.254 6.287 375.9 6.485C375.546 6.677 375.264 6.944 375.054 7.286C374.85 7.622 374.748 8.006 374.748 8.438C374.748 9.122 374.973 9.665 375.423 10.067C375.873 10.469 376.434 10.67 377.106 10.67Z" fill="#ABABAB"/>
</svg></div>

  <!-- Key Takeaways -->
  <section class="info center" style="width: 50%;
    margin: 0 auto;
    margin-top: 100px;
    margin-bottom: 100px;
    background: none;">
    <h4 style="margin-bottom: 14%;">Key Takeaways</h4>
    <p>This project focused on user research to identify the needs of educators. We crafted scalable solutions to ensure a better, more impactful digital experience.</p>
    <a href="#" class="btn-download">Download PDF</a>
  </section>

  <!-- Footer -->
    <section class="contact-section py-5">
        <div class="container" style="margin-top: 70px; margin-bottom: 70px; width: 968px;">
            <div class="row align-items-start">
                <!-- Left: Contact Info -->
                <div class="col-lg-6 mb-4">
                    <h2 class="fw-bold gradient-text mb-3" style="text-align: left;">Get<br>in touch</h2>
                    <p style="text-align: left;">
                        <a href="mailto:contactpurpleleaf@gmail.com" class="email-link" style="text-align: left;">
                            contactpurpleleaf@gmail.com
                        </a>
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

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
